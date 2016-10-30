jQuery('.sub-menu').addClass('dropdown-menu');
jQuery('.menu-item-has-children').addClass('dropdown');
jQuery('.menu-item-has-children > a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown').attr('role', 'button').attr('aria-haspopup', 'true').append(' <span class="caret"></span>');
