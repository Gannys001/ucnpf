function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action='www.ucnpf.org/e/search/index.php' onsubmit='return search_check(document.search_js1);'><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏目</option><option value='1'>|-简体中文</option><option value='3' style='background:#99C4E3'>&nbsp;&nbsp;|-运营项目</option><option value='5' style='background:#99C4E3'>&nbsp;&nbsp;|-新闻动态</option><option value='6' style='background:#99C4E3'>&nbsp;&nbsp;|-工作动态</option><option value='7' style='background:#99C4E3'>&nbsp;&nbsp;|-观点分享</option><option value='16' style='background:#99C4E3'>&nbsp;&nbsp;|-相关新闻</option><option value='17' style='background:#99C4E3'>&nbsp;&nbsp;|-中美国际反恐学术研讨会</option><option value='18' style='background:#99C4E3'>&nbsp;&nbsp;|-《旋风九日》美国放映活动</option><option value='19' style='background:#99C4E3'>&nbsp;&nbsp;|-中日学者交流项目</option><option value='20' style='background:#99C4E3'>&nbsp;&nbsp;|-美国市长代表团访华</option><option value='21' style='background:#99C4E3'>&nbsp;&nbsp;|-中美青年军官交流</option><option value='22' style='background:#99C4E3'>&nbsp;&nbsp;|-新视角论文颁奖典礼</option><option value='23' style='background:#99C4E3'>&nbsp;&nbsp;|-中国民间外交发展报告</option><option value='24' style='background:#99C4E3'>&nbsp;&nbsp;|-视频资料</option><option value='42' style='background:#99C4E3'>&nbsp;&nbsp;|-中日学者对话：朝鲜半岛核问题</option><option value='43' style='background:#99C4E3'>&nbsp;&nbsp;|-国际合规论坛</option><option value='10'>|-English</option><option value='30' style='background:#99C4E3'>&nbsp;&nbsp;|-Event</option><option value='31' style='background:#99C4E3'>&nbsp;&nbsp;|-Related news</option><option value='32' style='background:#99C4E3'>&nbsp;&nbsp;|-View Point</option><option value='33' style='background:#99C4E3'>&nbsp;&nbsp;|-Programs</option><option value='34' style='background:#99C4E3'>&nbsp;&nbsp;|-Third Annual Sino-U.S. Counterterrorism Dialogue</option><option value='35' style='background:#99C4E3'>&nbsp;&nbsp;|-Screening Mr. Deng Goes to Washington in the U.S.</option><option value='36' style='background:#99C4E3'>&nbsp;&nbsp;|-Chinese and Japanese Scholar Exchange Program</option><option value='37' style='background:#99C4E3'>&nbsp;&nbsp;|-U.S. Mayors Delegation Visit to China</option><option value='38' style='background:#99C4E3'>&nbsp;&nbsp;|-U.S. – China Young Military Cadets Exchange Progra</option><option value='39' style='background:#99C4E3'>&nbsp;&nbsp;|-“New Perspectives” Award Ceremony</option><option value='40' style='background:#99C4E3'>&nbsp;&nbsp;|-The Report of the Chinese Civil Diplomacy</option><option value='41' style='background:#99C4E3'>&nbsp;&nbsp;|-video</option></select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>");