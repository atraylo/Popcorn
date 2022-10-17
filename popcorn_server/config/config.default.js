/* eslint valid-jsdoc: "off" */

'use strict';

const db = require("./database");

/**
 * @param {Egg.EggAppInfo} appInfo app info
 */
module.exports = appInfo => {
  /**
   * built-in config
   * @type {Egg.EggAppConfig}
   **/
  const config = (exports = {});

  // use for cookie sign key, should change to your own and keep security
  config.keys = appInfo.name + 'app_key_secret';

  // add your middleware config here
  config.middleware = [];

  // Database Links
  config.sequelize = db;

  // Do not enable csrf authentication
  config.security = {
    csrf: {
      enable: false,
    },
  };

  // Allow cross-domain
  config.cors = {
    // origin: ['http://localhost:8080'],
    origin: '*',
    keepHeadersOnError: true,
    allowMethods: 'GET,HEAD,POST,PUT,DELETE,PATCH,OPTIONS',
    allowHeaders: [
      'Accept',
      'Content-Type',
      'Client-Signature',
      'User-Token',
      'x-requested-with',
    ],
  };

  // File upload configuration
  config.multipart = {
    fileSize: '2mb',
    whitelist: ['.jpg', '.jpeg', '.png', '.gif'],
  };

  // Exception Handling
  config.onerror = {
    // In case of code exception 
    //this handler function will be executed and no other functions will take effect.
    // all(){}

    // Execute when there is no: Accept: application/json in the request header
    html(e, ctx) {
      ctx.body = `<h1>The server side reported an error...</h1><p>${e.message}<p>`;
    },

    // Executed when the request header has: Accpet: application/json, for interface error handling
    json(e, ctx) {
      // eslint-disable-next-line no-proto
      if (e.__proto__.constructor.name === 'UnprocessableEntityError') {
        return ctx.error(422, e.errors[0].message); // Handling exceptions thrown by egg-validate
      }
      return ctx.error(500, e.message);
    },
  };

  // Custom Configuration
  const userConfig = {
    // myAppName: 'egg',
  };

  return { ...config, ...userConfig };
};
