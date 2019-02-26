<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2018071660686209",

		//商户私钥，您的原始格式RSA私钥
    'merchant_private_key' =>"MIIEpAIBAAKCAQEAvbDv3lwuwVKFYsePFPrgs3ovi4lT06d4zvnH3wVKQQn1cGKikHL7Gp12mq/kgQxAReKSsDOLa3CQHf04Lc9/TXV3dPCAVBCdMVgyG+2M/LUo1FyCqEssw1yx+s+v5oU5YUWQX5cRaJQduuykYH2TaDDo9ub6nODACd3sC+Y0jhHUyGmsTm9KCjTWDFdnYjjyktLqxyQ7xrzNsl/FnHPyDMJ43+ZRm5YE5SOUvMWoUOCcWEojqoSbG0Yk1m/KkZElqSOLY8/A6uJ44ivaFHYNtv0yHy44duivPeHVzcjo75BWXY0x
BdPNU18gTRJtvQonC3e7H0+40MHe0TBAgqr3rwIDAQABAoIBADXv+NTGa3kHCOyE
h/fUOk5uYNSRcOePCDf6KE4PCAUkWsjhEw5101bHDXGAsD3NiP0WJtW5Ylxjfmc4
mF/WT4Fr9FKpDCRbMQdV57GvQ1acAIcZ4wENlyXZ1rXVllO68Azrpdi4cPfGngmH
vlm9e0u2FJgYJ4yyD4j+tF7Rz4HRrDsexZzKu2jYcCsDCmXDo5BazJa7QSCoTOOa
2h1+p0XWI+vYsmdvnWsRhjO1RmgC+EWBggnSg42WeRBX0mUhfdqlZt1V9PzfxlP2
YQhFIdk1wIG7TM/A+6EWIRP8sYPXDFBs5ARZn5ixBcmeSB0mZnBs3PEKybLsG58b
qM3EA+ECgYEA80lBANtqv2VO808SyYKx6S+iEFOiPHw7MI7WTZWsNDupqu7GSvrG
y99B6jJR0+kQ+6HDsTGT5h5K4c9vQ8SlgOJ7IiIuBx/Y8r0tMOwpKEMz343x+Zko
js8glUCIMfiOF/Rfr4Drt1n7IO2QVepsz8osuU8Sddmw5qMWqSorPTECgYEAx5qs
20MYppCRheF6Opgh+nt1zZXlKDduwiKs0cwAEZv+1Hst7MWuTzouahSzde2cKbKc
7ZkQnT+NshIhjioap2XjAjpheHkjDzVDnByNbxIeHWVtxp7OxATXZReX7YJwBM15
HI7tHVHIk94c5FQLCohzFp0LA1YpGVNvVCY4yt8CgYEAz2G9SHbBSv+Xyi24bQ+8
inLxKguwuvCHIABSS3ZvgWLuYWgCnf2hIj5gmLtmJ0aAFI+zGcOSOFHQMSa6yMDC
99eXcORD6gzKyThbYl2dQ9XtTP5ZqxNUkE+djbyhnD8tGNxWCGvUAspwGISJScN4
F7RWZWwy50S22BNjiLYKf7ECgYAM/JtSiMMJ004kj88MEOnlCjNX9PC79R9Xsjnc
TJGUk7m4yWrrhNEahoaOkFo8ygDnFZ/wNY1HLeNiOpvETCj/yzlB49qDpB4L10NW
3OS23U7oSrkhuyNozYfWI/rWkS4IofXHTeVPiwqp1EG8+VrejJIwXndg+DIkW7Fa
oEIBsQKBgQCJAvovfhmLlxLU2XXikviBZJKcutIWazz+gNjayqr/T+YNJmWBN2Ey
/x94mCQV1xsVL64UbX5w0DqKEAuRkMEvF/l85Kc6hoTeuvklhdGnajegVIFcIz/x
FRy15plJPl25lyHtKoVPZGmBHlifLgjSOu56Ii0tE+kveCw6uenIeg==",
		
		//异步通知地址
		'notify_url' => "",
		
		//同步跳转
		 'return_url' => request()->domain().'/yikehao/Alipayreturnurl',

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmhtA8aHG5LrhCYp/decC6Yx+w2lGlJLLnVCqJNcqy4IVMxlU3JBZBk/3WHQKBLqAnC9EdHJ+m0Tm2YfeVgjPKHvKOZFrjbzki1beY80bpYxwDxH96rPgNDNV+FmngG38XNAzKuavNeQO1hZAZxxBN5eXvwg4YxHE6w3NFZeYbdC7Ldr+fT92W1/vsJ8AL2pZRpd3/uLtpv/89JQb5UQaAQf8n5SzoRI9JCgJZO+3kxWJz/ht5Kjsn1T+8VbNzrmK4PxZrHRxn42VXRwCqlq4Ps5LxhbTL7vZDwfQiT6sORjHHJgcMHM7M36rxc/En/azwgVPc0xfO2+MgbqLlhj4CQIDAQAB",
		
	
);