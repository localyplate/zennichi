/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
    jQuery('#zennichi-submit').click(function(){
        if(jQuery("input#second").val() == ""){
            jQuery("input#user_login").val(jQuery("input#first").val() + "000");
        }
        jQuery("input#user_login").val(jQuery("input#first").val() + jQuery("input#second").val());
    });
});