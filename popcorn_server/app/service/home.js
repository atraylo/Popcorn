'use strict';

const { Service } = require('egg');

class HomeService extends Service {
  async getBanner() {
    const { Home } = this.ctx.model;
    return Home.findAndCountAll({});
  }
}

module.exports = HomeService;
