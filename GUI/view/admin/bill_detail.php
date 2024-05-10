ror();
    }
}


/**
 * Draws a line from the current point to another point. Returns TRUE on success.
 *
 * @param resource $p
 * @param float $x
 * @param float $y
 * @throws PdfException
 *
 */
function PDF_lineto($p, float $x, float $y): void
{
    error_clear_last();
    $result = \PDF_lineto($p, $x, $y);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Finds a built-in spot color name, or makes a named spot color from the
 * current fill color. Returns TRUE on success.
 *
 * @param resource $p
 * @param string $spotname
 * @return int
 * @throws PdfException
 *
 */
function PDF_makespotcolor($p, string $spotname): int
{
    error_clear_last();
    $result = \PDF_makespotcolor($p, $spotname);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
    return $result;
}


/**
 * Sets the current point for graphics output. Returns TRUE on success.
 *
 * @param resource $p
 * @param float $x
 * @param float $y
 * @throws PdfException
 *
 */
function PDF_moveto($p, float $x, float $y): void
{
    error_clear_last();
    $result = \PDF_moveto($p, $x, $y);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Creates a new PDF file using the supplied file name.
 * Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 6, use
 * PDF_begin_document instead.
 *
 * @param resource $p
 * @param string $filename
 * @throws PdfException
 *
 */
function PDF_open_file($p, string $filename): void
{
    error_clear_last();
    $result = \PDF_open_file($p, $filename);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Places an image and scales it. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 5, use
 * PDF_fit_image instead.
 *
 * @param resource $pdfdoc
 * @param int $image
 * @param float $x
 * @param float $y
 * @param float $scale
 * @throws PdfException
 *
 */
function PDF_place_image($pdfdoc, int $image, float $x, float $y, float $scale): void
{
    error_clear_last();
    $result = \PDF_place_image($pdfdoc, $image, $x, $y, $scale);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Places a PDF page and scales it. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 5, use
 * PDF_fit_pdi_page instead.
 *
 * @param resource $pdfdoc
 * @param int $page
 * @param float $x
 * @param float $y
 * @param float $sx
 * @param float $sy
 * @throws PdfException
 *
 */
function PDF_place_pdi_page($pdfdoc, int $page, float $x, float $y, float $sx, float $sy): void
{
    error_clear_last();
    $result = \PDF_place_pdi_page($pdfdoc, $page, $x, $y, $sx, $sy);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Draws a rectangle. Returns TRUE on success.
 *
 * @param resource $p
 * @param float $x
 * @param float $y
 * @param float $width
 * @param float $height
 * @throws PdfException
 *
 */
function PDF_rect($p, float $x, float $y, float $width, float $height): void
{
    error_clear_last();
    $result = \PDF_rect($p, $x, $y, $width, $height);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Restores the most recently saved graphics state. Returns TRUE on success.
 *
 * @param resource $p
 * @throws PdfException
 *
 */
function PDF_restore($p): void
{
    error_clear_last();
    $result = \PDF_restore($p);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Rotates the coordinate system. Returns TRUE on success.
 *
 * @param resource $p
 * @param float $phi
 * @throws PdfException
 *
 */
function PDF_rotate($p, float $phi): void
{
    error_clear_last();
    $result = \PDF_rotate($p, $phi);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Saves the current graphics state. Returns TRUE on success.
 *
 * @param resource $p
 * @throws PdfException
 *
 */
function PDF_save($p): void
{
    error_clear_last();
    $result = \PDF_save($p);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Scales the coordinate system. Returns TRUE on success.
 *
 * @param resource $p
 * @param float $sx
 * @param float $sy
 * @throws PdfException
 *
 */
function PDF_scale($p, float $sx, float $sy): void
{
    error_clear_last();
    $result = \PDF_scale($p, $sx, $sy);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the border color for all kinds of annotations. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 6, use
 * the option annotcolor in
 * PDF_create_annotation instead.
 *
 * @param resource $p
 * @param float $red
 * @param float $green
 * @param float $blue
 * @throws PdfException
 *
 */
function PDF_set_border_color($p, float $red, float $green, float $blue): void
{
    error_clear_last();
    $result = \PDF_set_border_color($p, $red, $green, $blue);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the border dash style for all kinds of annotations. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 6, use
 * the option dasharray in
 * PDF_create_annotation instead.
 *
 * @param resource $pdfdoc
 * @param float $black
 * @param float $white
 * @throws PdfException
 *
 */
function PDF_set_border_dash($pdfdoc, float $black, float $white): void
{
    error_clear_last();
    $result = \PDF_set_border_dash($pdfdoc, $black, $white);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}


/**
 * Sets the border style for all kinds of annotations. Returns TRUE on success.
 *
 * This function is deprecated since PDFlib version 6, use
 * the options borderstyle and
 * linewidth in
 * PDF_create_annotation instead.
 *
 * @param resource $pdfdoc
 * @param string $style
 * @param float $width
 * @throws PdfException
 *
 */
function PDF_set_border_style($pdfdoc, string $style, float $width): void
{
    error_clear_last();
    $result = \PDF_set_border_style($pdfdoc, $style, $width);
    if ($result === false) {
        throw PdfException::createFromPhpError();
    }
}

