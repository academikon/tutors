let innerCursor = document.querySelector('.inner-cursor');
let outerCursor = document.querySelector('.outer-cursor');

document.addEventListerner('mousemove', moveCursor);

funtion moveCursor(e){
	let x = e.clientX;
	let y = e.clientY;
	
	innercursor.style.left=`${x}px`;
	innercursor.style.top=`${y}px`;
	outercursor.style.let=`${x}px`;
	outercursor.style.top=`${y}px`;
}
 
 let links=Array from(document querySelectorAll("a"));

 console.log (links);

 links.forEach(link=>{
 	link.addEventListerner("mouseover", ()=>{
 		innercursor.classList.add("grow");
    })	
 	link.addEventListerner("mouseleave", ()=>{
 		innercursor.classList.remove("grow");
 			
 	})
 })