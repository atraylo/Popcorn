'use strict';

module.exports = app => {
  const { STRING, INTEGER, DECIMAL, DATE } = app.Sequelize;
  const ProductData = app.model.define(
    'product',
    {
      id: { type: INTEGER, primaryKey: true, autoIncrement: true },
      category_id: INTEGER(11),
      file_name: STRING(32),
      sub_name: STRING(32),
      type: STRING(255),
      score: DECIMAL(10),
      desc: STRING(255),
      start_time: DATE(255),
      end_time: DATE(255),
      poster: STRING(255),
      photoIds: STRING(255),
    },
    {
      tableName: 'product',
      timestamps: true, // Enable timestamp(createdAt, updatedAt)
      updatedAt: 'updated_at', // updatedAt
      createdAt: 'created_at', // createdAt 
    }
  );
  return ProductData;
};
