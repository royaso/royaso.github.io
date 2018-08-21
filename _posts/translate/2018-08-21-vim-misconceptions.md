---
layout: default
title: 一些对vim的误解
---


Vim misconceptions

一些对vim的误解

Posted on July 19, 2012 by Tom Ryder

Vim isn’t the best tool for every task, and there’s no reason you shouldn’t
stick to your GUI IDE if you know it like the back of your hand and are highly
productive in it. The very basic best practices for text editing in general
apply just as well to more familiar editing interfaces as they do to Vim, so
nobody should be telling you that Vim is right for everyone and everything and
that you’re wrong not to use it.

不是每件事都用Vim来做才是最好的选择,只要你用的图形界面的集成开发环境你够熟悉,用起来高效就行了.不管你是熟悉的IDE界面还是Vim,文本编辑的最佳实践原则都是通用的.所以不要相信那些说"每个人都应该用Vim,不用Vim就是错的"的人.

However, because Vim and vi-like editors in general have a lot of trouble
shaking off the connotations of their serverside, terminal-only, mouseless
past, there are a few persistent objections to even trying Vim that seem to
keep cropping up. If you’re someone curious about Vim but you heard it was
useless for any of the following reasons, or if you’re an experienced user
looking to convince a hesitant neophyte to try Vim, the following list might
clear a few things up.

可惜大部分人对Vim印象还停留在只能在服务器上用,终端的黑窗口,没有鼠标.拒绝去尝试Vim. 如果你对Vim好奇,或是你想引新人入坑,下面这些疑问的解答会让你更清楚地认识Vim

Vim takes too long to learn

Vim要学很久

If you want analogues to all of the features in your IDE, that would likely
take some time, just as it would in any other new editor. However, if all you
need to start is to be able to enter text, move around, and load and save
files, you just need to know:

如果你想用Vim模拟出你IDE(集成开发环境)的所有功能,那当然需要点时间了,就算是其他编辑器要模拟出这些功能也需要时间啊.但如果你只是想要简单地编辑功能: 插入文字,移动光标,打开保存文件,那你只需要知道一下5条:

  • i to enter insert mode, Esc to leave it

  •	i 进入插入模式,Esc回到正常模式
  • Arrow keys to move around in both modes

  •	在插入模式和正常模式都可以用方向键移动
  • :e <filename> to load a document

  •	:e <filename> 打开文件
  • :w <filename> to save a document

  •	:w <filename> 保存文件
  • :q to quit, :q! to ignore unsaved changes

  •	:q 退出vim  :q!强制退出,不保存已经更改的文件

To do pretty much everything Windows Notepad would let you do, on top of that
you’d only need to learn:

上面那些功能再加上下面几条就已经足够你把Vim当成Windows下的记事本用了,

  • dd to cut a line

  dd剪贴(删除)一整行
  • yy to copy a line

  yy复制一行
  • p to paste a line

  •  	p粘贴一行
  • /<pattern> to search for text

  • 	/<pattern>搜索文字
  • n to go to the next result

  •	  n跳转到下一个搜索到的文字
  • :s/pattern/replacement to replace text

  •	:s/pattern/replacement 替换文字

From that point, you only get faster as you learn how to do new things. So
saying that Vim takes weeks to learn is a bit disingenuous when the essentials
can easily be mastered with a few minutes’ practice.

学到这些之后,你的文字编辑功底会随着你学到的东西更多而更快.所以那些说Vim要学好几星期的人都是假的,你看,你不是在这几分钟里就学会了基本的编辑操作了?

Granted, the arrow keys are a bit of an anti-pattern, but you can worry about
that later.

确实,hjkl这样的光标移动是挺奇怪的,但现在你可以暂时不用理它们,用方向键够了

Vim has no GUI

Vim没有图形界面

Vim has a GUI version called Gvim for both Windows and Unix. For Mac OS X, the
MacVim port is preferred. For experienced users the GUI’s only real advantage
over the terminal version is a wider color palette, but it has a toolbar and
other GUI elements which some new users may find useful.

在Windows和Unix下Vim都有图形界面的版本,名叫Gvim. Mac OS X下的版本叫MacVim. 对高级用户来说图形界面的版本唯一比较好的地方就是它的配色会比终端版本的多,但,真正的程序员会在乎这个吗?! 还有些工具栏啊菜单栏啊这些东西,有些人可能觉得会比较有用吧.除此之外终端版本完胜啊,想想,那么多终端里面可以用的命令,再和vim强强联合起来简直不要太牛逼啊!!

Vim doesn’t have spell checking

Vim没有拼写检查

Vim allows spell checking with system dictionaries, using :set spell and :set
spelllang. Misspelt and unknown words are highlighted appropriately.

有啊.系统自带的字典,用set spell和setspelllang设置后,就可以高亮出错的单词了

Vim doesn’t have syntax highlighting

Vim没有语法高亮

Vim has support for syntax highlighting that can be turned on with :syntax
enable, for a very wide variety of programming languages, markup languages, and
configuration file syntaxes.

:syntax enable打开语法高亮,可以支持各种语言和配置文件

Vim only allows eight colours

Vim只有8位色

This is a limitation of terminal emulators rather than of Vim itself, but most
modern GUI terminal emulators allow 256 colours anyway with a little extra
setup. The GUI version, Gvim, has full color support with the familiar rrggbb
color definitions.

这是终端模拟器的限制不是Vim的不足,但现在大部分图形界面的终端模拟器通过设置后都可以支持256位色,至于图形界面的Gvim更是拥有和其他图形界面程序一样的多种颜色

Vim doesn’t have class/function folding

Vim没有类/函数折叠

Vim does in fact have support for folding, based on both code structure and
manually defined boundaries. See :help folding for details.

Vim有折叠功能啊,可以根据代码结构或者手动折叠,详情请看:help folding

Vim doesn’t have autocompletion

Vim没有自动完成

Vim allows basic completion using words already in the current buffer, and also
more advanced omnicompletion using language dictionaries for constants,
variables, classes, and functions.

Vim可以用打开的文件自动补全,更高级的omnicompletion功能更是可以补全常量,变量,类,函数

Vim doesn’t have a file browser

Vim没有文件浏览器

Vim has had the Netrw plugin bundled for some time, which provides a pretty
capable filesystem browser.

Vim早就内置了Netrw这个插件了,它就可以浏览文件树了

Vim can’t do network editing

Vim不能编辑网络上的文件

Again, the bundled Netrw plugin handles this. Editing files over FTP and SCP
links is pretty transparent. You can open a file on a remote server by entering
the following, which will prompt for your username and password:
:e ftp://ftp.example.com/index.html

这个啊,Netrw插件已经具备这个功能了,FTP啊SCP上的文件都可以编辑啊.你可以打开一个远程服务器上的文件,当然如果要验证的话还要输入用户名和密码 :e ftp://ftp.example.com/index.html

When you’re done editing, you just enter :w to save the file, and it’s
automatically uploaded for you. You can record your FTP credentials in a .netrc
file to save having to type in usernames and passwords all the time. URIs with
scp:// work the same way; with a good public key infrastructure set up, you can
use Vim quite freely as a network-transparent editor.

编辑完成后:w保存,Vim就会自动上传了.可以在.netrc文件保存你的验证信息以后就不用填用户名和密码了.SCP的方式也是一样,只要配置了公钥就可以无缝地编辑远程服务器上的文件了

Vim doesn’t have tabs or windows

Vim没有标签或窗口

The model Vim uses for tabs and windows is rather different from most GUI
editors, but both are supported and have been for some time.

Vim的标签和窗口跟大部分的编辑器的标签窗口概念不一样,但它们早就存在了,有的,Vim有标签和窗口

Vim has too many modes

Vim的模式太多了

It has three major modes: normal mode, insert mode, and command mode. There’s a
fourth that’s Vim-specific, called visual mode, for selecting text.

Vim的三个常用模式:普通模式,插入模式,命令模式,还有一个是选择模式:用来选择的

Most editors are modal in at least some respect; when you bring up a dialog
box, or enter a prefix key to another command, you’re effectively changing
modes. The only real difference is that context shifts in Vim are at first less
obvious; the screen doesn’t look too different between normal, insert, and
command mode.

大部分编辑器都有模式这个概念;比如打开个对话框,按组合键,这些就是模式.只要你按下的键不是直接输出原样字符的.只是在Vim里,你切换了模式它不明显,不会突然给你跳个对话框来,在它3个模式下,好像整个节目也没什么不同啊

The showmode option helps to distinguish between insert and normal mode, a
common frustration for beginners. This gets easier when you get into the habit
of staying out of insert mode when not actually entering text.

可以设置下:set showmode就可以在状态行下区分这三种模式了,新手可能对此比较困惑,但熟练之后,你会习惯在普通模式下,除非要插入点什么东西

Vim doesn’t work with the mouse

Vim不支持鼠标

Vim works fine with the mouse, in both Gvim and xterm-like terminal emulators,
if you really want it. You can change the position of the cursor, scroll
through the document, and select text as normal. Setting the below generally
does the trick:

Gvim和终端下的vim都支持鼠标,用鼠标可以改变光标,滚动文档,选择文字,只要如下设置

:set mouse=a

However, even a little experience in Vim may show you that you don’t need the
mouse as much as you think. Careful use of the keyboard allows much more speed
and precision, and it’s quite easy to run a complex editing session without
even moving from the keyboard’s “home row”, let alone all the way over to the
mouse.

但只要你熟悉点Vim就会发现,在Vim下你根本不需要鼠标.用键盘更快更高效!甚至于你大量编辑下你都不需要手指离开主键盘区,更不用说去拿鼠标了

Vim doesn’t do Unicode

Vim不支持Unicode

Vim supports Unicode encodings with the encoding option. It’s likely you’ll
only need to put the below in your .vimrc file and then never really think
about encoding in your editor again:

Vim支持Unicode的,也就是支持中文,只要在.vimrc文件设置下这行就行了

:set encoding=utf-8

Vim isn’t being developed or maintained

Vim已经没人开发或维护了

The original author of Vim, and its current maintainer and release manager, is
Bram Moolenaar. At the time of writing, he is working for Google, and is paid
to spend some of his time developing Vim. The development mailing list for Vim
is very active, and patches are submitted and applied to the publically
accessible Mercurial repository on a regular basis. Vim is not a dead project.

Vim的开发者,也就是现在的维护者和发布者,都是他Bram Moolenaar.写此文时,他就职于google 他开发Vim都有薪水拿哦.Vim的开发邮件列表还很活跃呢,补丁都更新的.Vim才不是挂掉的项目

Vim is closed source

Vim是闭源的

Vim isn’t proprietary or closed source, and never has been. It uses its own
GPL-compatible license called the Vim license.

Vim不是私有闭源软件,从来都不是!它的许可协议是GPL相容的,名叫Vim许可

The original vi used to be proprietary because Bill Joy based the code on the
classic UNIX text editor ed, but its source code has now been released under a
BSD-style license.

vi的源代码是闭源的,因为它是基于Unix的流编辑器ed.但现在vi的源代码也是开源的,BSD许可.




--------


啊....终于翻译完了

感受: 里面很多尤其是后面部分的误解,我感觉没有啊,我从一接触Vim就知道它是免费开源而且开发活跃的,但开头的一些误解还是挺频繁的---谁说vim要学好几个月啊,就那5条已经够用了啊!这个真的跟玩魔方一样,花一两小时学一下,受用终身啊!

就这样,现场翻译感觉如何啊??  88
