'use strict';

/**
 * @param {Egg.Application} app - egg application
 */
module.exports = app => {
  const { router, controller, middleware } = app;
  const { user, upload, home } = controller;
  const { sign, auth, rbac } = middleware;

  // Whether to enable API signature verification
  const enableRSAChecker = false;

  // Note the order of execution of the middleware
  const checks = enableRSAChecker ? [sign(), auth(), rbac()] : [auth()];

  // login
  if (enableRSAChecker) {
    router.post('/api/user/login', sign(), user.login);
    // Change password (no permission verification required: any user can change their account password)
    router.post(
      '/api/user/update_password',
      sign(),
      auth(),
      user.updatePassword
    );
  } else {
    router.post('/api/user/login', user.login);
    // Change password (no permission verification required: any user can change their account password)
    router.post('/api/user/update_password', auth(), user.updatePassword);
  }

  // Home page banner
  router.get('/banner', home.index);
  // avatar upload
  router.post('/upload/avatar', upload.avatar);
  // user
  router.resources('users', '/api/users', ...checks, user);
  // Film Categories
  router.get('/api/category/list', controller.category.allList);
  router.resources('category', '/api/category', controller.category);
  // Film Resources
  router.resources('product', '/api/product', controller.product);
};
