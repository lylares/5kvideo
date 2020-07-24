<?php
class GTK {
    /*
     * 生成的字符串包含的字符设置
     */
 
    const NUMERIC_ONLY = 1; //只含有数字
    const LETTER_ONLY = 2; //只含有字母
    const MIXED = 3; //混合数字和字母
 
    /*
     * 用户传入变量，分别为字符串长度；包含的字母；是否包含大写字母
     */
 
    protected $length, $type, $upper;
 
    /*
     * 参数初始化
     * @param int,$length 字符串长度
     * @param const,$type 生成字符串的类型
     * @param boolean,$upper 是否含有大写字母
     */
 
    public function __construct($length =14, $type = self::MIXED, $upper = true) {
        $this->length = $length;
        $this->type = $type;
        $this->upper = $upper;
    }
 
    /*
     * 对象被转化为字符串时调用
     * @return string
     */
 
    public function __toString() {
        return $this->pickUpChars();
    }
 
    /*
     * 生成随机字符串
     * @global $type
     * @return string,$string
     */
 
    public function pickUpChars() {
        switch ($this->type) {
            case self::NUMERIC_ONLY:
                $raw = '0123456789';
                break;
            case self::LETTER_ONLY:
                $raw = 'qwertyuioplkjhgfdsazxcvbnm' .
                        'QWERTYUIOPLKJHGFDSAZXCVBNM';
                break;
 
            default:
                $raw = 'qwertyuioplkjhgfdsazxcvbnm' .
                        'QWERTYUIOPLKJHGFDSAZXCVBNM' .
                        '0123456789';
                break;
        }
        $string = '';
        for ($index = 0; $index < $this->length; $index++)
            $string .= substr($raw, mt_rand(0, strlen($raw) - 1), 1);
        if (!$this->upper)
            $string = strtolower($string);
        return $string;
    }
 
}













