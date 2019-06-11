$(document).ready(function(){
$('#property').click(function () {    
    $(':checkbox.check-1').prop('checked', this.checked);    
 });
$('#testimonial').click(function () {    
    $(':checkbox.check-2').prop('checked', this.checked);    
 });
$('#user').click(function () {    
    $(':checkbox.check-3').prop('checked', this.checked);    
 });
$('#member').click(function () {    
    $(':checkbox.check-4').prop('checked', this.checked);    
});
 // $('#tall').click(function () {    
 //    $(':checkbox.tall-1').prop('checked', this.checked);    
 // });
 // $('#short').click(function () {    
 //    $(':checkbox.short-1').prop('checked', this.checked);    
 // });
 // $('#user').click(function () {    
 //    $(':checkbox.user').prop('checked', this.checked);    
 // });
 // $('#member').click(function () {    
 //    $(':checkbox.member-1').prop('checked', this.checked);    
 // });

// $('input[type="checkbox"]').change(function(e) {

//   var checked = $(this).prop("checked"),
//       container = $(this).parent(),
//       siblings = container.siblings();

//   container.find('input[type="checkbox"]').prop({
//     indeterminate: false,
//     checked: checked
//   });


  // function checkSiblings(el) {

  //   var parent = el.parent().parent(),
  //       all = true;

  //   el.siblings().each(function() {
  //     return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
  //   });

  //   if (all && checked) {

  //     parent.children('input[type="checkbox"]').prop({
  //       indeterminate: false,
  //       checked: checked
  //     });

  //     checkSiblings(parent);

  //   } else if (all && !checked) {

  //     parent.children('input[type="checkbox"]').prop("checked", checked);
  //     parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
  //     checkSiblings(parent);

  //   } else {

  //     el.parents("li").children('input[type="checkbox"]').prop({
  //       indeterminate: true,
  //       checked: false
  //     });

  //   }

  // }

  // checkSiblings(container);
});
// });
