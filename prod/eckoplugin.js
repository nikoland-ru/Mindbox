jQuery(document).ready(function(){"use strict";jQuery(document).on(".shorttoggle .toggleheader","click",function(){jQuery(this).next(".togglecontent").toggle()}),jQuery(document).on(".shorttabsheader","click",function(){jQuery(".shorttabscontent",jQuery(this).parent()).hide(),jQuery(".shorttabsheader.active",jQuery(this).parent()).removeClass("active"),jQuery(this).addClass("active"),jQuery(".shorttabscontent[data-id='"+jQuery(this).attr("data-id")+"']").show()}),jQuery(".shorttabs").each(function(){jQuery(".shorttabscontent",this).hide(),jQuery(".shorttabscontent",this).first().show(),jQuery(".shorttabsheader",this).first().addClass("active")})});