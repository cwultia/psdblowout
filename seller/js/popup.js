function popup(mylink, sample1)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, sample1, 'width=700,height=600,scrollbars=yes');
return false;
}