'use strict';

const { Service } = require('egg');

class ProductService extends Service {
  /**
   * Get related movies by movie id paging
   * @param {Object} where Conditions for querying users
   * @param {Number} page Current Page Break
   * @param {Number} pageSize Current page how many entries per page
   */
  async getPage(where, page, pageSize) {
    const { Product } = this.ctx.model;
    return Product.findAndCountAll({
      where,
      offset: pageSize * (page - 1),
      limit: pageSize,
    });
  }

  // all the list
  async allList() {
    const { Product } = this.ctx.model;
    return Product.findAll();
  }
}

module.exports = ProductService;
