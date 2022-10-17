'use strict';
const jwt = require('jsonwebtoken');

/**
 * Login information verification middleware
 */
module.exports = () => async (ctx, next) => {
  // Determine if a token is present in the request header
  const token = ctx.request.headers['user-token'];
  if (!token) {
    ctx.error(401);
    return;
  }

  //Determine if the token is correct(docs: https://www.npmjs.com/package/jsonwebtoken)
  try {
    ctx.user = await jwt.verify(token, ctx.app.config.keys);
    await next();
  } catch (e) {
    console.log('token', e);

    ctx.error(401);
  }
};
