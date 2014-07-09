/**
 * @author jyb
 */

/* footer bottom fix function */
// Min-Height를 지정해 주기 위해 기존 Default Height를 저장
var Height_Index = Number(document.getElementById("container").clientHeight);
// Window 창 로드시
window.onload = changeContentSize;
// Window 창 크기를 조정할때마다
window.onresize = changeContentSize;

function changeContentSize() {
	var Height_Window = Number(document.documentElement.clientHeight);
	// Window 창 높이
	var Height_Footer = Number(document.getElementById("footer").clientHeight);
	// Footer 높이 구하기
	var ContentTop = Height_Window - Height_Footer - 5;
	// 5 = Margin + Padding + Border of Top, Bottom
	document.getElementById("container").style.minHeight = Height_Index + 'px';
	// container에 Min-Height 적용
	document.getElementById("container").style.height = ContentTop + "px";
	// container 높이 변경
}

//////////////////////////////////////////////////////////////////////

function ready() {
	alert("아직 준비중입니다...");
}

