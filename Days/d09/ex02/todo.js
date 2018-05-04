var i = 0;

function delete_todo(ref)
{
  var list = document.getElementById('ft_list');
  if (confirm('Souhaitez-vous supprimer ce to do ?'))
  {
	  list.removeChild(document.getElementById(ref));
		setCookie();
	}
}

function add_todo(text)
{
    var elem_div = document.createElement("div");
    i = i + 1;
    var divRef = "note" + i;
    elem_div.appendChild(document.createTextNode(text));
    elem_div.appendChild(document.createElement("br"));
    elem_div.classList.add("note");
    elem_div.setAttribute('id', divRef);
    elem_div.setAttribute('onclick', "delete_todo(\'" + divRef + "\');");
    var element = document.getElementById("ft_list");
    element.insertBefore(elem_div, element.firstChild);
    setCookie();
}

function new_todo()
{
    $new = prompt("Renseignez le nouveau to do :", "");
    if ($new == "")
        return;
    else if ($new == null)
        return;
    else
        add_todo($new);
}

function setCookie()
{
  exdays = 365;
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + time.toUTCString();
	var list = document.getElementById('ft_list');
	var doc = "";
	for (var i = list.childNodes.length - 1; i >= 0; i--)
  {
		if (list.childNodes[i].innerHTML != null)
			doc += list.childNodes[i].innerHTML;
	}
	document.cookie = "todo=" + doc + "; " + expires;
}

function getCookie()
{
	var new_cookie = document.cookie;
  new_cookie = new_cookie.substring(5).split('<br>');
	for (var i = 0; i < new_cookie.length - 1; i++)
  {
		var c = ca[i];
		add_todo(c);
	}
}

getCookie();
