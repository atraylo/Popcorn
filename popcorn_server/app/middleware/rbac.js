'use strict';

/**
 * Determine if the path can match the url based on the request method
 * @param {String} path Permission Path
 * @param {String} url Request Path
 * @param {String} method Request Method
 * @return {Boolean} Whether the match is successful or not
 */
function check(path, url, method, id) {
  method = method.toLowerCase();
  const allowMethods = ['get', 'post', 'delete', 'patch'];
  if (!allowMethods.includes(method)) {
    throw new Error('Unknown request method');
  }
  if (method === 'delete' || method === 'patch') {
    path = path.replace(':id', id);
  }
  return path === url;
}

module.exports = () => async (ctx, next) => {
  // The property assigned by ctx.user in the auth middleware,
  // Since the login information will be verified first, this property is necessarily available
  const uid = ctx.user.id;
  const { id } = ctx.params;
  const { path: url, method } = ctx.request;
  const permissions = await ctx.service.user.getUserPermis(uid, 1);
  for (let i = 0, l = permissions.length; i < l; i++) {
    if (check(permissions[i].path, url, method, id)) {
      return await next();
    }
  }
  return ctx.error(403);
};
