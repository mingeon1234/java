function get_members(){
	return ['egoing','k8805','sorialgi'];
}
members = get_members();
//members.length는 배열에 담긴 값의 숫자를 알려줌

for(i=0;i<membes.length;i++){
	document.write(members[i].toUpperCase());
	document.write('<br/>');
}