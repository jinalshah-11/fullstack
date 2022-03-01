var i = 0;
function Counter() 
{
  i = i + 1;
  postMessage(i);
  setTimeout("Counter()",1000);
}

Counter(); 