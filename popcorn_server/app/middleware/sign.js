'use strict';

// !!! Solving JSEncrypt errors: must be executed before requiring JSEncrypt
global.window = {};
global.navigator = { appName: 'node.js' };
const JSEncrypt = require('jsencrypt');
const { SHA256 } = require('crypto-js');

/**
 * Data signature verification middleware
 */
module.exports = () => async (ctx, next) => {
  const sign = ctx.request.headers['client-signature'];
  const msg = 'Access denied: Data signature error may have been tampered with';
  if (!sign) {
    ctx.error(403, msg);
    return;
  }

  // Get Data
  const { path, origin, body, method } = ctx.request;
  const args = {
    url: `${origin}${path}`,
    method: method.toLowerCase(),
  };
  if (args.method === 'get' && Object.keys(ctx.query).length) {
    args.params = ctx.query;
  }
  if (Object.keys(body).length) {
    args.data = body;
  }

  // Verify the signature
  // Note: The publicKey must be a pair with the private key 
  // used by the client to generate the signature
  const jsencrypt = new JSEncrypt();
  const publicKey = `-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDA/SVT71FB1DABDW41oq6I7vBa
9IcFNuEKnIVcLTZmnGfj5hx5Z1f1IkKdNj1YYFhMh5PxsYREd+uUHVwljDR9ZnPx
cy0PNyMGaUiwkYBfrJ7W2K/BhJiYXsKcFjJt5/ZNc4V3I6hO5hvw0LNaa2La4p9z
gXCiI6ytT4k5e1shoQIDAQAB
-----END PUBLIC KEY-----`;
  jsencrypt.setPublicKey(publicKey);
  if (!jsencrypt.verify(JSON.stringify(args), sign, SHA256)) {
    return ctx.error(403, msg + JSON.stringify(args));
  }

  await next();
};
