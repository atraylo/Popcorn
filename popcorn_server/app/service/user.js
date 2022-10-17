'use strict';

const bcrypt = require('bcryptjs');
const { Service } = require('egg');
const { Op } = require('sequelize');

class UserService extends Service {
  /**
   * Registered User Data
   * @param {Object} data
   */
  async registerUser(data) {
    const { User } = this.ctx.model;
    const userExists = await User.findOne({
      attributes: ['id'],
      where: {
        [Op.or]: {
          email: data.email,
          username: data.username,
        },
      },
    });
    if (userExists) throw new Error('Email or username already exists');
    const newUser = await User.create(data);
    return newUser.dataValues;
  }

  /**
   * Login Search user information based on conditions
   * @param {Object} user
   */
  async loginByEmail({ email, password }) {
    const { User } = this.ctx.model;

    // Check if the user exists according to the mailbox
    let user = await User.findOne({
      where: { email },
    });

    if (!user) throw new Error('Incorrect email or password');

    // Determine if the status is wrong
    if (user.status !== 0) {
      throw new Error('User status fail, cannot login');
    }

    // Determine if the password is incorrect
    const isValid = bcrypt.compareSync(password, user.password);
    if (!isValid) {
      throw new Error('Incorrect email or password');
    }误

    user = user.dataValues;
    delete user.password;
    return user;
  }

  /**
   * Delete the corresponding user according to id
   * @param {Number} uid
   */
  async deleteUserById(id) {
    return await this.ctx.model.User.destroy({ where: { id } });
  }

  /**
   * Modify user information based on ID
   * @param {Number} id User ID
   * @param {Object} data User information to be modified
   */
  async updateUserById(id, data) {
    const { User } = this.ctx.model;
    const { username, email } = data;
    const andWhere = { id: { [Op.ne]: id } };
    let neenCheck = false;
    if (username && email) {
      neenCheck = true;
      andWhere[Op.or] = { username, email };
    } else if (username) {
      neenCheck = true;
      andWhere.username = username;
    } else if (email) {
      neenCheck = true;
      andWhere.email = email;
    }

    if (neenCheck) {
      const userExists = await User.findOne({
        attributes: ['id'],
        where: { [Op.and]: andWhere },
      });
      if (userExists) throw new Error('The email or username already exists');
    }

    return await User.update(data, { where: { id } });
  }

  /**
   * Update user password
   * @param {Number} id User ID
   * @param {Object} data New password and old password
   */
  async updatePassword(id, data) {
    const { User } = this.ctx.model;
    const user = await User.findByPk(id);
    if (!user) {
      throw new Error('User does not exist');
    }

    // If the old password is incorrect, change it directly if it is correct
    const isValid = bcrypt.compareSync(data.old_password, user.password);
    if (!isValid) {
      throw new Error('Incorrect email or password');
    }
    user.password = data.new_password;
    return await user.save();
  }
}

module.exports = UserService;
