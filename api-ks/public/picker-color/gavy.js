function changeStylingOnChangeq(objects){	
    let element = objects,
    input_1 = element.input_1,
    changeSelectorTest = element.changeSelectorTest,
    cssProperty_1 = element.cssProperty_1,
    pixels_1 = element.pixels_1;
    
    if(cssProperty_1 === 'fontFamily_1'){
        changeFontFamily_1(_1, changeSelectorTest, cssProperty_1);
    } else {
        _1 ? 
        document.querySelector(changeSelectorTest).style[cssProperty_1] = `${input_1.value}px` : 
        document.querySelector(changeSelectorTest).style[cssProperty_1] = `${input_1.value}`;
    }
}

function changeFontFamily_1(input_1, changeSelectorTest, cssProperty_1) {
    var fontFamily_1 = input_1.value.replace("+", " ");
	var link = document.getElementById('fontLink');
    
	if(link) {
		link.href = `https://fonts.googleapis.com/css?family=${input_1.value}`;
	} else {
        var link = document.createElement('link');
		link.id = 'fontLink';
		link.rel = 'stylesheet';
		link.href = `https://fonts.googleapis.com/css?family=${input_1.value}`;
		document.head.appendChild(link);
	}
	document.querySelector(changeSelectorTest).style[cssProperty_1] = fontFamily_1;
    console.log(fontFamily_1);
}
