'use strict';

const { Controller } = require('egg');
const { Op } = require('sequelize');

/**
 * Movie List
 */
class ProductController extends Controller {
  // 根据
  async allList() {
    const { service } = this.ctx;
    const products = await service.product.allList();
    this.ctx.success(products);
  }

  // Search the associated movie by movie category ID
  async allListByCategoryId() {
    const { query, service } = this.ctx;
    let { page, size, categoryId, searchValue } = query;
    page = Number(page) || 1;
    size = Number(size) || 10;
    // Keyword Search Movies
    const where = {
      file_name: { [Op.like]: `%${searchValue}%` },
    };
    if (categoryId) {
      where.categoryId = categoryId;
    }
    const products = await service.product.getPage(where, page, size);
    this.ctx.success(products);
  }
}

module.exports = ProductController;
