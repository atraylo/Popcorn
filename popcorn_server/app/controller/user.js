'use strict';

const jwt = require('jsonwebtoken');
const { Controller } = require('egg');
const loginRule = require('../validate/loginRule');
const registerUserRule = require('../validate/registerUserRule');
const updateUserinfoRule = require('../validate/updateUserinfoRule');
const updatePasswordRule = require('../validate/updatePasswordRule');

class UserController extends Controller {

  // Logout users
  async destroy() {
    const uid = Number(this.ctx.params.id);
    if (!uid) throw new Error('ID 有误');
    await this.ctx.service.user.deleteUserById(uid);
    this.ctx.success(uid); // Deleted successfully returns the deleted user ID
  }

  // Modify user information
  async update() {
    const { ctx } = this;
    const id = ctx.params.id;
    const infos = ctx.request.body;
    if (!id) throw new Error('The user ID parameter must be passed');
    if (Object.keys(infos).length === 0) throw new Error('Please pass on the modified content');
    ctx.validate(updateUserinfoRule, infos);
    await ctx.service.user.updateUserById(id, infos);
    ctx.success(id, 200);
  }

  // Create new user
  async create() {
    const { ctx } = this;
    const data = ctx.request.body;
    ctx.validate(registerUserRule, data);
    const res = await ctx.service.user.registerUser(data);
    ctx.success(res);
  }

  // Login
  async login() {
    const { ctx } = this;
    const { request, service } = ctx;
    const data = request.body;
    ctx.validate(loginRule, data);
    const user = await service.user.loginByEmail(data);
    user.token = jwt.sign(user, this.config.keys);
    user.permissions = await service.user.getUserPermis(user.id, 0);
    ctx.success(user);
  }

  // password chaging
  async updatePassword() {
    const { ctx } = this;
    const { request, service } = ctx;
    const data = request.body;
    ctx.validate(updatePasswordRule, data);
    await service.user.updatePassword(ctx.user.id, data);
    ctx.success();
  }
}

module.exports = UserController;
