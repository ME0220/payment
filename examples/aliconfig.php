<?php
/**
 * @author: helei
 * @createTime: 2016-07-15 17:19
 * @description:
 */

// 一下配置均为本人的沙箱环境，贡献出来，大家测试

// 个人沙箱帐号：
/*
 * 商家账号   naacvg9185@sandbox.com
 * 商户UID   2088102169252684
 * appId     2016073100130857
 */

/*
 * 买家账号    aaqlmq0729@sandbox.com
 * 登录密码    111111
 * 支付密码    111111
 */

return [
    'use_sandbox'               => true,// 是否使用沙盒模式

    'partner'                   => '2088102170349458',
    'app_id'                    => '2016080700188202',
    'sign_type'                 => 'RSA2',// RSA  RSA2

    // 可以填写文件路径，或者密钥字符串  当前字符串是 rsa2 的支付宝公钥(开放平台获取)
    'ali_public_key'            => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnMpCIwFh1PeW9w9ylyDkTxp2Oo56z0/X+ni2zvnZ5O3JZZytkjPUwmFAZCQoHNR1t7vlEVjFU8gXn1RaJy3+MqEI83LQDeug1pK+kLLFima+IShDyQbiQcLJth657dP0QcBrmqQMAQfvveuaYajfvEdxydM6Mj73zIW9czOGKjD0rOoDBZwA8TdZ1/Xtf6OiFo8dcc0FAahXit5YxnLpxVNJmE/CU1ISE+rdL3JNyIIct/2lhLfHEhJohZ1OBq37Z8B94yWL2BDCRo5/Bj1Ij30gfm46LIRyxvsVVxlCzqdHBAwgbIZXjGCPpubV2TLjYdBZgKEuXpeMs+CNoo7ShQIDAQAB',

    // 可以填写文件路径，或者密钥字符串  我的沙箱模式，rsa与rsa2的私钥相同，为了方便测试
    'rsa_private_key'           => 'MIIEogIBAAKCAQEAuGcQZUeERDN5a18S339HoifX/pEFIJ86/SyIPhi84hcZ/ER4JnkWRvOOIS1hVP3PJbS8WrAD55fb90sKNHEkuFoIYhJanANU5bjd3Tc5vFNill8zQjuwQhMuuxNGCmns67lDzC3MUSnOvJNZe6CmC1sdkDoEAe4Ltf23S0Ct9huaXwY4NU9OeDYZYE9rMD3E547PjSV2/TuW7OxDt9b03GGwZ6+aOPlATDGf7qOQ03/NedADbrf8M7ddAzyW1+vddF8jGR5S7GTk1xs8rDfiAuW2SESqirSrKr5qHVBHt8qU8ius0/U3tX49K0GJ2tv+YQzdeCSNHHXU8G/CpfNx6wIDAQABAoIBAGid6DpdaZe70E3vIWj07/H6Qttk8RDB5ZiO9DiuljJ6wr5RJg1FszLLqL3/3fF3EVemAxo8M+rnR98zjnWUHy4LvifNm+RZK4gs6oo/c5z5fbwsBIu2C1hhQ6jU1W7BC63sbJ9g+EKvwl9QBXtS+AEHT21szKs/nxs/9wZVipxNs+wbipNdl1FlPXy2VMLZ8r2zB6I97Hzd4otPSd5fvpfDzaiWN7mrw8nt+CSh64opq53b+eOAHrSvrPdrxmh0pkONRieJ0zwwC8pify5cJqwDzYWH9xihXUiTItgVNuOF3FZMLCVmEh2GW1jzfX4kjmXHR7ZohDwQHOI83718LWECgYEA42RDRer9nVZG8S08lxx2hmMPag9a4E3U9lws0LsiBWZ2fwK7pmCoPV9woVolxKkDD1hTMVBkb1m430ObTo7gVhwyWZu2cdhdrJGfkiwGVBWQj5rMfTjGaC9t/hjH6Xn5y5oTZXGyWHbbgKurXHwKkKa4HjRsZ1feqzbr3hv2CDECgYEAz5o6L+nwO8tgRL04XtBDf301L2DgXJF9JV+YZRaSBUUA1lPYDusjJw+Gp8RPFj5glWanED2c4ik0xRl/dpgGcwZTkRZZAjd/vvwpAwEsJHN0KlaYVWpiR0rSbRVaWO9MTT5XLeeO05HxnU5fQCmoJd1E2kVEVVrNpW+qc0D1cNsCgYABm0C6armV9fkUVRx7eNEBjAuc1TTwJrydbPNIGjpYTWwC47MNrtsha94w1aE0rXj/D8GutIGxI7IhqamcOXguQ467gVUdosiuomy9LKBy0aAu04okTFVigQtG40fuR1VTceg3LEF1TImqdAwG4D123iao1/f4Fu/Ux9OMwyfO0QKBgB48XyclUkjTKRU53eDpQjtqN/nLiUHSKsDruF1YuTGtSB7vHTOnCXqh50G99KrPsO9xgPl7j8Lcr4PZX9gc8iuEi11BPPt2q9NcFHkMjapNamjULeGa2e96NUWP65WyXJGPd9EGvaWQxvjbNkI5DvVc0a9ckURBMlxa9B9PIbArAoGAQccrgw1NV29+3A7bilAYLfTuZnk9CJrXYhmEjQrwLM4eQawftvIzbE2lDYOgI8zNaYzvJam49NiH2YvN0gtMIWnpm6UDDjNX+gkWrUJz2/UwJxTddys6OWuKVgDbUj98fEVdgCHEn0tlc/cXvb8M1X5Wj678c+k9YdS2dIqYwtU=',

    'limit_pay'                 => [
        //'balance',// 余额
        //'moneyFund',// 余额宝
        //'debitCardExpress',// 	借记卡快捷
        //'creditCard',//信用卡
        //'creditCardExpress',// 信用卡快捷
        //'creditCardCartoon',//信用卡卡通
        //'credit_group',// 信用支付类型（包含信用卡卡通、信用卡快捷、花呗、花呗分期）
    ],// 用户不可用指定渠道支付当有多个渠道时用“,”分隔

    // 与业务相关参数
    'notify_url'                => 'https://helei112g.github.io/v1/notify/ali',
    'return_url'                => 'https://helei112g.github.io/',

    'return_raw'                => false,// 在处理回调时，是否直接返回原始数据，默认为 true
];
