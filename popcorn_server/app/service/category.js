'use strict';

const { Service } = require('egg');

class CategoryService extends Service {
  // all list
  async allList() {
    const { Category } = this.ctx.model;
    return Category.findAll();
  }
}

module.exports = CategoryService;
