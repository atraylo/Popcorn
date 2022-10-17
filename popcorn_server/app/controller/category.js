'use strict';

const { Controller } = require('egg');
/**
 * Film Categories
 */
class CategoryController extends Controller {
  // All Lists
  async allList() {
    const { service } = this.ctx;
    const categorys = await service.category.allList();
    this.ctx.success(categorys);
  }
}

module.exports = CategoryController;
