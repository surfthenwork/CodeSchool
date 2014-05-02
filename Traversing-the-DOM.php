# Searching the DOM

$("#somediv li");
# where the Parent is "somedive" and the Descendant is the li

$("#somediv > li");
# where the > grabs only the li elements that are direct descendants (child selector) of the #somediv ul
# > means direct descendant

$(".somediv, #somediv");
# , will create multiple selectors

$("#somediv li:first");
# pseudo class which will only select the first li within the "somedive" ul id

$("#somediv li:last");
# pseudo class which will only select the last li within the "somedive" ul id

$("#somediv li:odd");
# pseudo class which will select the odd li elements within the "somedive" ul id

$("#somediv li:even");
# pseudo class which will select the even li elements within the "somedive" ul id

# where :first, :last, :odd, :even are filters
# the index for list items always starts at 0