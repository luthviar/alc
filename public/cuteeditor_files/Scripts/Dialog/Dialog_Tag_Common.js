var _$_4e9d=["inp_class","inp_width","inp_height","sel_align","sel_textalign","sel_float","inp_forecolor","img_forecolor","inp_backcolor","img_backcolor","inp_tooltip","value","className","width","style","height","align","styleFloat","cssFloat","textAlign","title","color","backgroundColor","","removeAttribute","class","onclick"];var inp_class=Window_GetElement(window,_$_4e9d[0],true);var inp_width=Window_GetElement(window,_$_4e9d[1],true);var inp_height=Window_GetElement(window,_$_4e9d[2],true);var sel_align=Window_GetElement(window,_$_4e9d[3],true);var sel_textalign=Window_GetElement(window,_$_4e9d[4],true);var sel_float=Window_GetElement(window,_$_4e9d[5],true);var inp_forecolor=Window_GetElement(window,_$_4e9d[6],true);var img_forecolor=Window_GetElement(window,_$_4e9d[7],true);var inp_backcolor=Window_GetElement(window,_$_4e9d[8],true);var img_backcolor=Window_GetElement(window,_$_4e9d[9],true);var inp_tooltip=Window_GetElement(window,_$_4e9d[10],true);UpdateState= function UpdateState_Common(){};SyncToView= function SyncToView_Common(){inp_class[_$_4e9d[11]]= element[_$_4e9d[12]];inp_width[_$_4e9d[11]]= element[_$_4e9d[14]][_$_4e9d[13]];inp_height[_$_4e9d[11]]= element[_$_4e9d[14]][_$_4e9d[15]];sel_align[_$_4e9d[11]]= element[_$_4e9d[16]];if(Browser_IsWinIE()){sel_float[_$_4e9d[11]]= element[_$_4e9d[14]][_$_4e9d[17]]}else {sel_float[_$_4e9d[11]]= element[_$_4e9d[14]][_$_4e9d[18]]};sel_textalign[_$_4e9d[11]]= element[_$_4e9d[14]][_$_4e9d[19]];inp_tooltip[_$_4e9d[11]]= element[_$_4e9d[20]];inp_forecolor[_$_4e9d[11]]= revertColor(element[_$_4e9d[14]][_$_4e9d[21]]);inp_forecolor[_$_4e9d[14]][_$_4e9d[22]]= inp_forecolor[_$_4e9d[11]];img_forecolor[_$_4e9d[14]][_$_4e9d[22]]= inp_forecolor[_$_4e9d[11]];inp_backcolor[_$_4e9d[11]]= revertColor(element[_$_4e9d[14]][_$_4e9d[22]]);inp_backcolor[_$_4e9d[14]][_$_4e9d[22]]= inp_backcolor[_$_4e9d[11]];img_backcolor[_$_4e9d[14]][_$_4e9d[22]]= inp_backcolor[_$_4e9d[11]]};SyncTo= function SyncTo_Common(element){element[_$_4e9d[12]]= inp_class[_$_4e9d[11]];try{element[_$_4e9d[14]][_$_4e9d[13]]= inp_width[_$_4e9d[11]];element[_$_4e9d[14]][_$_4e9d[15]]= inp_height[_$_4e9d[11]]}catch(x){};element[_$_4e9d[16]]= sel_align[_$_4e9d[11]];if(Browser_IsWinIE()){element[_$_4e9d[14]][_$_4e9d[17]]= sel_float[_$_4e9d[11]]}else {element[_$_4e9d[14]][_$_4e9d[18]]= sel_float[_$_4e9d[11]]};element[_$_4e9d[14]][_$_4e9d[19]]= sel_textalign[_$_4e9d[11]];element[_$_4e9d[20]]= inp_tooltip[_$_4e9d[11]];element[_$_4e9d[14]][_$_4e9d[21]]= inp_forecolor[_$_4e9d[11]];element[_$_4e9d[14]][_$_4e9d[22]]= inp_backcolor[_$_4e9d[11]];if(element[_$_4e9d[12]]== _$_4e9d[23]){element[_$_4e9d[24]](_$_4e9d[12])};if(element[_$_4e9d[12]]== _$_4e9d[23]){element[_$_4e9d[24]](_$_4e9d[25])};if(element[_$_4e9d[20]]== _$_4e9d[23]){element[_$_4e9d[24]](_$_4e9d[20])};if(element[_$_4e9d[16]]== _$_4e9d[23]){element[_$_4e9d[24]](_$_4e9d[16])}};img_forecolor[_$_4e9d[26]]= inp_forecolor[_$_4e9d[26]]= function inp_forecolor_onclick(){SelectColor(inp_forecolor,img_forecolor)};img_backcolor[_$_4e9d[26]]= inp_backcolor[_$_4e9d[26]]= function inp_backcolor_onclick(){SelectColor(inp_backcolor,img_backcolor)}