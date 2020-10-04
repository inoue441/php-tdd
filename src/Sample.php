<?php

class Sample
{
    const YES = 'Yes';
    const NO = 'No';

    /**
     * 奇数文字目が「R, U, D」のいずれか、かつ、偶数文字目が「L, U, D」のいずれか => Yes
     * 奇数文字目が「L」、または、偶数文字目が「R」                               => No
     *
     * @param  string  $input
     * @return string
     */
    public function solve(string $input): string
    {
        for ($i = 0, $l = strlen($input); $i < $l; $i++) {
            $seq = $i + 1;

            // 奇数文字目が「R, U, D」のいずれか"ではない" => No
            if ($seq % 2 !== 0 && !in_array($input[$i], ['R', 'U', 'D'])) {
                return self::NO;
            }
            // 偶数文字目が「L, U, D」のいずれか"ではない" => No
            if ($seq % 2 === 0 && !in_array($input[$i], ['L', 'U', 'D'])) {
                return self::NO;
            }
        }

        return self::YES;
    }
}