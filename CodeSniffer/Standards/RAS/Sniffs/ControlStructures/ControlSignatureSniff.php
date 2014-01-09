<?php
class RAS_Sniffs_ControlStructures_ControlSignatureSniff extends PEAR_Sniffs_ControlStructures_ControlSignatureSniff
{
    /**
     * Returns the patterns that this test wishes to verify.
     *
     * @return array(string)
     */
    protected function getPatterns()
    {
        return array(
                'do {EOL...} while (...);EOL',
                'while (...)EOL...{',
                'for (...)EOL...{',
                'if (...)EOL...{',
                'foreach (...)EOL...{',
                'EOL...} else if (...) {EOL',
                '...}EOL...elseEOL...{',
                'do {EOL',
               );

    }//end getPatterns()
}
