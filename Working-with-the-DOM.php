# Appending to the DOM

$(document).ready(fucntion(){
// create a php node with the price
});

$(document).ready(fucntion(){
var price = $('<p>Price goes here</p>');
});

#Filters
# .append(<element>) .prepend(<element>) .after(<element>) .before(<element>)

$(document).ready(fucntion(){
var price = $('<p>Price goes here</p>');
$('.somediv').append(price);
$('.somebutton').remove();
});

#.prepend adds the node to the top (first child) of .somediv
#.append adds the node to the bottom (last child) of .somediv

#.appendTo .prependTo .insertAfter .insertBefore

$(document).ready(fucntion(){
var price = $('<p>Price goes here</p>');
price.appendTo($('.somediv'));
$('.somebutton').remove();
});
