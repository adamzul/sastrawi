<?php
/**
 * Sastrawi (https://github.com/sastrawi/sastrawi)
 *
 * @link      http://github.com/sastrawi/sastrawi for the canonical source repository
 * @license   https://github.com/sastrawi/sastrawi/blob/master/LICENSE The MIT License (MIT)
 */

namespace Sastrawi\Stemmer;

use Sastrawi\Dictionary\ArrayDictionary;

/**
 * Stemmer factory helps creating pre-configured stemmer
 */
class StemmerFactory
{
    /**
     * @return \Sastrawi\Stemmer\Stemmer
     */
    public function createStemmer()
    {
        $dictionaryFile = __DIR__ . '/../../../data/kata-dasar.txt';

        if (!is_readable($dictionaryFile)) {
            throw new \Exception('Dictionary file is missing. It seems that your installation is corrupted.');
        }

        $words = explode(PHP_EOL, file_get_contents($dictionaryFile));

        $dictionary = new ArrayDictionary($words);
        $stemmer    = new Stemmer($dictionary);

        return $stemmer;
    }
}
