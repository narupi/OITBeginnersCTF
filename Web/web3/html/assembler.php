<pre><code>
; hello.asm

section	.text
	global	_start

_start:				; entry point
	mov	edx,len
	mov	ecx,msg
	mov	ebx,1		; file descriptor(stdout)
	mov	eax,4		; system call number (sys_write)
	int	0x80;		; system call

	mov	eax,1		; system call number (sys_exit)
	int	0x80		; system call

section	.data

msg	db	'Hello, World!',0xa
len	equ	$ - msg
</code></pre>
