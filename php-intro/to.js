//EXERCISE 1
//Declaring global variables
var variable1 = 'hello';
var variable2 = 4;
var variable3 = ['foo', 'bar'];

//EXERCISE 2
//Reassigning variables
var variable1 = 4;
var variable1 = 'hello';

//EXERCISE 3
//Creating arrays and objects
var numbers = [3, 5, 16, 3, 4, 18];
var result = numbers[0];
for (var i = 1; i < numbers.length; i++) {
    result += numbers[i];
};
$('body').text(result);

//EXERCISE 4 
//Spitting out some plaintext
$('body').text('This is a string' + 'This is another string');

//EXERCISE 5
//Using variables as substitutes for their values and changing floating numbers into integers
var my_float = 3.5;
var my_int = Math.floor(my_float);
var my_float2 = 5.3;
var my_int2 = parseInt(my_float2, 10);

//EXERCISE 6
//Conditional?
var my_var1 = 'Hello';
//checking if my_var2 is defined anywhere and not null
if (typeof my_var2 == 'string' || typeof my_var2 == 'number' || typeof my_var2 == "boolean" || typeof my_var2 == "object") {
    console.log(my_var2);
} else {
    console.log(my_var1);
}

//EXERCISE 7
//IDK this just looks like javascript to me.
var check_var = "What time is it?";

switch (check_var) {
    case 'hello':
        $('body').text('greetings');
        break;
    case 'bye':
        $('body').text('good bye');
        break;
    default:
        $('body').text('It\'s party time!');
        break;
}

//EXERCISE 8
//objects!
var student = {name: 'Skippy', class: 'English', grade: 75};

//EXERCISE 9
//more objects
var student = {};
student.name = 'Skippy';
student.class = 'English';
student.grade = 75;

//EXERCISE 10
var num_array = [35, 2, 14, 56, 65, 52];
function find_greatest_num_and_index(direction) {
    var greatest = null;
    var greatest_index = null;
    if (direction >= 0) {
        var i = 0;
        var increment = 1;
        var end_loop = num_array.length;
    }
    else {
        var i = num_array.length;
        var increment = -1;
        var end_loop = 0;
    }
    while (i != end_loop) {
        if (num_array[i] > greatest) {
            greatest = num_array[i];
            greatest_index = i;
        }
        i += increment;
    }
    return {greatest: greatest, greatest_index: greatest_index};
};
find_greatest_num_and_index(1);