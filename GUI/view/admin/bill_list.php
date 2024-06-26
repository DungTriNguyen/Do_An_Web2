mail(): "sendmail_from" not
 * set in php.ini or custom "From:" header missing.
 * The From header sets also
 * Return-Path under Windows.
 *
 * If messages are not received, try using a LF (\n) only.
 * Some Unix mail transfer agents (most notably
 * qmail) replace LF by CRLF
 * automatically (which leads to doubling CR if CRLF is used).
 * This should be a last resort, as it does not comply with
 * RFC 2822.
 * @param string $additional_parameter additional_parameter is a MTA command line
 * parameter. It is useful when setting the correct Return-Path
 * header when using sendmail.
 *
 * This parameter is escaped by escapeshellcmd internally
 * to prevent command execution. escapeshellcmd prevents
 * command execution, but allows to add additional parameters. For security reason,
 * this parameter should be validated.
 *
 * Since escapeshellcmd is applied automatically, some characters
 * that are allowed as email addresses by internet RFCs cannot be used. Programs
 * that are required to use these characters mail cannot be used.
 *
 * The user that the webserver runs as should be added as a trusted user to the
 * sendmail configuration to prevent a 'X-Warning' header from being added
 * to the message when the envelope sender (-f) is set using this method.
 * For sendmail users, this file is /etc/mail/trusted-users.
 * @throws MbstringException
 *
 */
function mb_send_mail(string $to, string $subject, string $message, $additional_headers = null, string $additional_parameter = null): void
{
    error_clear_last();
    $result = \mb_send_mail($to, $subject, $message, $additional_headers, $additional_parameter);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
}


/**
 *
 *
 * @param string $pattern The regular expression pattern.
 * @param string $string The string being split.
 * @param int $limit
 * @return array The result as an array.
 * @throws MbstringException
 *
 */
function mb_split(string $pattern, string $string, int $limit = -1): array
{
    error_clear_last();
    $result = \mb_split($pattern, $string, $limit);
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}


/**
 * This function will return an array of strings, it is a version of str_split with support for encodings of variable character size as well as fixed-size encodings of 1,2 or 4 byte characters.
 * If the split_length parameter is specified, the string is broken down into chunks of the specified length in characters (not bytes).
 * The encoding parameter can be optionally specified and it is good practice to do so.
 *
 * @param string $string The string to split into characters or chunks.
 * @param int $split_length If specified, each element of the returned array will be composed of multiple characters instead of a single character.
 * @param string $encoding The encoding
 * parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 *
 * A string specifying one of the supported encodings.
 * @return array mb_str_split returns an array of strings.
 * @throws MbstringException
 *
 */
function mb_str_split(string $string, int $split_length = 1, string $encoding = null): array
{
    error_clear_last();
    if ($encoding !== null) {
        $result = \mb_str_split($string, $split_length, $encoding);
    } else {
        $result = \mb_str_split($string, $split_length);
    }
    if ($result === false) {
        throw MbstringException::createFromPhpError();
    }
    return $result;
}
             filter-b-btn">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="admin-table-bill">
                        <table class="admin-table-list">
                            <thead>
                                <tr>
                                    <th width="5%">STT</th>
                                    <th width="">Họ tên</th>
                                    <tINDX( 	 ]�P�          (   �  �             p          p�    h R      y    ��)������:;���)���tg)�� �      ��              o c i 8 . p h p p h p "�    h X      y    �x)������:;��x)���tg)��       v              o p c a c h e . p h p 1�    h X      y    �{)������:;��{)���tg)�� �      >�              o p e n s s l . p h p �    p ^      y    �]w)������:;��]w)���tg)��       �
              o u t c o n t r o l . p h p  �    p Z      y    �]w)������:;��]w)���tg)��       �
              O U T C O N ~ 1 . P H P     +�    p Z      y    ��y)������:;��y)���tg)��                     p a s s w o r d . p h p     �    h T      y    ��t)������:;�[�t)���tg)��        �              	p c n t l . p h p p   �    h R      y    r�u)������:;�r�u)���tg)�� 0      �/              p c r e . p h p h p   -�    ` P      y    �Dz)������:;��Dz)���tg)�� �      P�              p d f . p h p ?�    h T      y    �&})������:;�N})���tg)��       �              	p g s q l . p h p    2�    h T      y    �B{)������:;�)j{)���tg)��        �              	p o s i x . p h p    ,�    ` N      y    ,z)������:;�,z)���tg)�� �      ��              p s . p h p o U�    h V      y    �~�)������:;���)���tg)�� @      �1              
p s p e l l . p h p h N�    p Z      y    T)������:;�T)���tg)��       �              r e a d l i n e . p h p     &�    h X      y    S�x)������:;�S�x)���tg)���      �              r p m i n f o . p h p �    ` P      y    '�v)������:;�'�v)���tg)��                     r r d . p h p J�    ` P      y    %~)������:;�TL~)���tg)�� 0      .              s e m . p h p $�    h X      y    R�x)������:;�R�x)���tg)��       �              s e s s i o n . p h p (�    h T      y    �Ey)������:;��Ey)���tg)��       �              	s h m o p . p h p h p d�    p \      y    ��)������:;���)���tg)��       �              s i m p l e x m l . p h p    d�    p Z      y    ��)������:;���)���tg)��       �              S I M P L E ~ 1 . P H P                   ΀)������:;�΀)���tg)���      �              s o l r . p h p h p   \�    ` P      y    �ف)������:;��ف)���tg)��        �              s p l . p h p X�    h V      y    e<�)������:;�e<�)���tg)�� 0      �/              
s q l s r v . p h p  T�    h V      y    �W�)������:;��W�)���tg)��       "              
s s d e e p . p h p   �    h V      y    �Wt)������:;��Wt)���tg)�� P      3M              
s t r e a m . p h p   %�    h X      y    H�x)������:;�H�x)���tg)�� P      A              s t r i n g s . p h p M�    h V      y    ��~)������:;���~)���tg)��       g	              
s w o o l e . p h p  :�    h T      y     �|)������:;� �|)���tg)�� �      �q              	u o d b c .  h p    P�    h R      y    jY)������:;�jY)���tg)��       0              u o p z . p h p     �    ` P      y    �w)������:;��5w)���tg)��       &              u r l . p h p Z�    ` P      y    zd�)������:;�zd�)���tg)���      �              v a r . p h p �    h T      y    �~t)������:;�9�t)���tg)�� 0      u               	x d i f f . p h p     a�    h V      y    \؂)������:;�\؂)���tg)���      �              
x m l r p c . p h p  ]�    h R      y    @�)������:;�@�)���tg)��       p              y a m l . p h p     3�    ` P      y    >�{)������:;�>�{)���tg)�� 0      �)              y a z . p h p L�    ` P      y    ��~)������:;���~)���tg)��                      z i p . p h p *�    h R      y    v�y)������:;�v�y)���tg)�� @      1>              z l i b . p h p                                                                                                                    <?php

namespace Safe;

use Safe\Exceptions\OpensslException;

/**
 * Gets the cipher initialization vector (iv) length.
 *
 * @param string $method The cipher method, see openssl_get_cipher_methods for a list of potential values.
 * @return int Returns the cipher length on success.
 * @throws OpensslException
 *
 */
function openssl_cipher_iv_length(string $method): int
{
    error_clear_last();
    $result = \openssl_cipher_iv_length($method);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
    return $result;
}


/**
 * openssl_csr_export_to_file takes the Certificate
 * Signing Request represented by csr and saves it
 * in PEM format into the file named by outfilename.
 *
 * @param string|resource $csr See CSR parameters for a list of valid values.
 * @param string $outfilename Path to the output file.
 * @param bool $notext
 * The optional parameter notext affects
 * the verbosity of the output; if it is FALSE, then additional human-readable
 * information is included in the output. The default value of
 * notext is TRUE.
 * @throws OpensslException
 *
 */
function openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true): void
{
    error_clear_last();
    $result = \openssl_csr_export_to_file($csr, $outfilename, $notext);
    if ($result === false) {
        throw OpensslException::createFromPhpError();
    }
}


/**
 * openssl_csr_export takes the Certificate Signing
 * Request represented by csr and stores it in
 * PEM format in out, which is passed by
 * reference.
 *
 * @param string|resource $csr See CSR parameters for a list of valid values.
 * @param string|null $out on success, this string will contain the PEM encoded CSR
 * @param bool $notext
 * The optional parameter notext affects
 * the 