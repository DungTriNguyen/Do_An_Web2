g $key
 * @param float $value
 * @throws PdfException
 *
 */
function PDF_set_value($p, string $key, float $value): void
{
    error_clear_last();
    $result = \PDF_set_value($p, $key, $value);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current color space and color. Returns TRUE on success.
 *
 * @param resource $p
 * @param string $fstype
 * @param string $colorspace
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 * @throws PdfException
 *
 */
function PDF_setcolor($p, string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4): void
{
    error_clear_last();
    $result = \PDF_setcolor($p, $fstype, $colorspace, $c1, $c2, $c3, $c4);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current dash pattern to b black
 * and w white units. Returns TRUE on success.
 *
 * @param resource $pdfdoc
 * @param float $b
 * @param float $w
 * @throws PdfException
 *
 */
function PDF_setdash($pdfdoc, float $b, float $w): void
{
    error_clear_last();
    $result = \PDF_setdash($pdfdoc, $b, $w);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets a dash pattern defined by an option list. Returns TRUE on success.
 *
 * @param resource $pdfdoc
 * @param string $optlist
 * @throws PdfException
 *
 */
function PDF_setdashpattern($pdfdoc, string $optlist): void
{
    error_clear_last();
    $result = \PDF_setdashpattern($pdfdoc, $optlist);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the flatness parameter. Returns TRUE on success.
 *
 * @param resource $pdfdoc
 * @param float $flatness
 * @throws PdfException
 *
 */
function PDF_setflat($pdfdoc, float $flatness): void
{
    error_clear_last();
    $result = \PDF_setflat($pdfdoc, $flatness);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current font in the specified fontsize, using a
 * font handle returned by PDF_load_font.
 * Returns TRUE on success.
 *
 * @param resource $pdfdoc
 * @param int $font
 * @param float $fontsize
 * @throws PdfException
 *
 */
function PDF_setfont($pdfdoc, int $font, float $fontsize): void
{
    error_clear_last();
    $result = \PDF_setfont($pdfdoc, $font, $fontsize);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current fill color to a gray value between 0 and 1 inclusive.
 * Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 4, use
 * PDF_setcolor instead.
 *
 * @param resource $p
 * @param float $g
 * @throws PdfException
 *
 */
function PDF_setgray_fill($p, float $g): void
{
    error_clear_last();
    $result = \PDF_setgray_fill($p, $g);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current stroke color to a gray value between 0 and 1 inclusive.
 * Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 4, use
 * PDF_setcolor instead.
 *
 * @param resource $p
 * @param float $g
 * @throws PdfException
 *
 */
function PDF_setgray_stroke($p, float $g): void
{
    error_clear_last();
    $result = \PDF_setgray_stroke($p, $g);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the current fill and stroke color to a gray value between 0 and 1 inclusive. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 4, use
 * PDF_setcolor instead.
 *
 * @param resource $p
 * @param float $g
 * @throws PdfException
 *
 */
function PDF_setgray($p, float $g): void
{
    error_clear_last();
    $result = \PDF_setgray($p, $g);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the linejoin parameter to specify the shape
 * at the corner