#!/bin/bash

lanmu="zh-cn/view zh-cn/news en/view en/news"
for each_lanmu in $lanmu;do
	dir=$(ls $each_lanmu)
	for each_dir in $dir;do
	if [ -d $each_lanmu/$each_dir ];then
		html=$(ls $each_lanmu/$each_dir)
		for each_html in $html;do
			echo "http://www.ucnpf.org/$each_lanmu/$each_dir/$each_html"
		done
	fi
	done
done
