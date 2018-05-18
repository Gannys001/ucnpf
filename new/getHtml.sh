#!/bin/bash
lang="zh-cn en"
for each_lang in $lang;do
content=$(ls $each_lang)
for each_content in $content;do
	if [ -f $each_lang/$each_content ];then
		echo "http://www.ucnpf.org/$each_lang/$each_content"
	fi
done
done
	
