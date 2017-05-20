/*
 *
 * Backpack Crud / Form
 *
 */

jQuery(function ($) {

  'use strict';
});
$(function () {
  $(document).on('change', "select[name='type']", function () {
    if ($(this).val() == 'select') {
      $("select[name='key']").closest('.form-group').removeClass('hide');
    } else {
      $("select[name='key']").closest('.form-group').addClass('hide');
    }
  });
});
