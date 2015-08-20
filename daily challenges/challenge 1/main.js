var haystack = ['hay0','hay1','hay2','hay3','hay4','needle'];
var needle = ['hay2','needle'];
var haystackIndex = 0;
var needleIndex = 0;
var output = null;
for(var i = 0; i <= haystack.length; i++){
	if(needle[needleIndex] === haystack[haystackIndex]){
		console.log('found match');
	}
}