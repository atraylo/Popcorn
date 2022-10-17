'use strict';

const { Controller } = require('egg');

class HomeController extends Controller {
  // Get Homepage banner
  async index() {
    const { service } = this;
    const bannerList = await service.home.getBanner();
    this.ctx.success(bannerList);
  }
}
module.exports = HomeController;
