<?php

namespace Sastrawi\Morphology\Disambiguator;

/** 
* Disambiguate Prefix Rule 1a
* Rule 1a : berV -> ber-V
*/
class DisambiguatorPrefixRule1a implements DisambiguatorInterface
{
    /** 
     * Disambiguate Prefix Rule 1a
     * Rule 1a : berV -> ber-V
     * @return string
     */
    public function disambiguate($word)
    {
        $matches  = null;
        $contains = preg_match('/^ber([aiueo].*)$/', $word, $matches);

        if ($contains === 1) {
            return $matches[1];
        }
    }
}
