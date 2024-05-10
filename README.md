package Crypt::Cipher::SEED;

### BEWARE - GENERATED FILE, DO NOT EDIT MANUALLY!

use strict;
use warnings;
our $VERSION = '0.069';

use base qw(Crypt::Cipher);

sub blocksize      { Crypt::Cipher::blocksize('SEED')      }
sub keysize        { Crypt::Cipher::keysize('SEED')        }
sub max_keysize    { Crypt::Cipher::max_keysize('SEED')    }
sub min_keysize    { Crypt::Cipher::min_keysize('SEED')    }
sub default_rounds { Crypt::Cipher::default_rounds('SEED') }

1;

=pod

=head1 NAME

Crypt::Cipher::SEED - Symmetric cipher SEED, key size: 128 bits

=head1 SYNOPSIS

  ### example 1
  use Crypt::Mode::CBC;

  my $key = '...'; # length has to be valid key size for this cipher
  my $iv = '...';  # 16 bytes
  my $cbc = Crypt::Mode::CBC->new('SEED');
  my $ciphertext = $cbc->encrypt("secret data", $key, $iv);

  ### example 2 (slower)
  use Crypt::CBC;
  use Crypt::Cipher::SEED;

  my $key = '...'; # length has to be valid key size for this cipher
  my $iv = '...';  # 16 bytes
  my $cbc = Crypt::CBC->new( -cipher=>'Cipher::SEED', -key=>$key, -iv=>$iv );
  my $ciphertext = $cbc->encrypt("secret data");

=head1 DESCRIPTION

This module implements the SEED cipher. Provided interface is compliant with L<Crypt::CBC|Crypt::CBC> module.

B<BEWARE:> This module implements just elementary "one-block-(en|de)cryption" operation - if you want to
encrypt/decrypt generic data you have to use some of the cipher block modes - check for example
L<Crypt::Mode::CBC|Crypt::Mode::CBC>, L<Crypt::Mode::CTR|Crypt::Mode::CTR> or L<Crypt::CBC|Crypt::CBC> (which will be slower).

=head1 METHODS

=head2 new

 $c = Crypt::Cipher::SEED->new($key);
 #or
 $c = Crypt::Cipher::SEED->new($key, $rounds);

=head2 encrypt

 $ciphertext = $c->encrypt($plaintext);

=head2 decrypt

 $plaintext = $c->decrypt($ciphertext);

=head2 keysize

  $c->keysize;
  #or
  Crypt::Cipher::SEED->keysize;
  #or
  Crypt::Cipher::SEED::keysize;

=head2 blocksize

  $c->blocksize;
  #or
  Crypt::Cipher::SEED->blocksize;
  #or
  Crypt::Cipher::SEED::blocksize;

=head2 max_keysize

  $c->max_keysize;
  #or
  Crypt::Cipher::SEED->max_keysize;
  #or
  Crypt::Cipher::SEED::max_keysize;

=head2 min_keysize

  $c->min_keysize;
  #or
  Crypt::Cipher::SEED->min_keysize;
  #or
  Crypt::Cipher::SEED::min_keysize;

=head2 default_rounds

  $c->default_rounds;
  #or
  Crypt::Cipher::SEED->default_rounds;
  #or
  Crypt::Cipher::SEED::default_rounds;

=head1 SEE ALSO

=over

=item * L<CryptX|CryptX>, L<Crypt::Cipher>

=item * L<https://en.wikipedia.org/wiki/SEED>

=back

=cut
                 � mục trong thư mục image** để tiện thao tác chứ **không nên link ảnh đến trang web đó** dễ bị lỗi.
  - Tớ **đã push toàn bộ file các trang hoàn thành tốt lên githud**. Các bạn có thể pull về để kiểm tra xem có sai sót gì không.
  - **Nếu có sai xót gì các bạn nhớ báo tớ trong nhóm zalo nha.**


## Task 2 (từ 18h:46p 9/3/2024 -> 23h:59p - 15/3/2024): Tìm kiếm và đề suất form đăng nhập, đăng ký và giao diện trang admin. Thiết kế lớp DTO và DAO + các bản csdl cơ bản.

- Mỗi người hãy tìm kiếm và đề suất form đăng ký, đăng nhập và giao diện admin. Về form đăng nhập đăng ký, có thể tham khảo web nào cũng được nha (có link web càng tốt), còn về giao diện admin thì mấy phen tham khảo mấy đồ án mà mấy phen từng tham gia xem có cái nào đẹp đẹp hong nha.

- Sau khi kiếm được mẫu sẽ code sau.

- Đây là hình ảnh sơ đồ cở sở dữ liệu của nhóm (đã được thầy Sang tư vấn): 
  ![](./Photo_diary/CSDL.png) 

- Có gì tớ thiết kế sơ đối tượng trong lớp DTO với lớp DAO rồi push lên để anh em tham khảo nha, có gì góp ý chung.

- ## Giao việc:
  - **Tìm kiếm và đề xuất hình ảnh về form đăng nhập, đăng ký và giao diện** : Phát, Sang, Dũng, Trí.
  - **Code form đăng nhập, đăng ký**: Sang
  - **Thiết kế cơ bản DTO, DAO + package Crypt::Cipher::SAFER_K64;

### BEWARE - GENERATED FILE, DO NOT EDIT MANUALLY!

use strict;
use warnings;
our $VERSION = '0.069';

use base qw(Crypt::Cipher);

sub blocksize      { Crypt::Cipher::blocksize('SAFER_K64')      }
sub keysize        { Crypt::Cipher::keysize('SAFER_K64')        }
sub max_keysize    { Crypt::Cipher::max_keysize('SAFER_K64')    }
sub min_keysize    { Crypt::Cipher::min_keysize('SAFER_K64')    }
sub default_rounds { Crypt::Cipher::default_rounds('SAFER_K64') }

1;

=pod

=head1 NAME

Crypt::Cipher::SAFER_K64 - Symmetric cipher SAFER_K64, key size: 64 bits

=head1 SYNOPSIS

  ### example 1
  use Crypt::Mode::CBC;

  my $key = '...'; # length has to be valid key size for this cipher
  my $iv = '...';  # 16 bytes
  my $cbc = Crypt::Mode::CBC->new('SAFER_K64');
  my $ciphertext = $cbc->encrypt("secret data", $key, $iv);

  ### example 2 (slower)
  use Crypt::CBC;
  use Crypt::Cipher::SAFER_K64;

  my $key = '...'; # length has to be valid key size for this cipher
  my $iv = '...';  # 16 bytes
  my $cbc = Crypt::CBC->new( -cipher=>'Cipher::SAFER_K64', -key=>$key, -iv=>$iv );
  my $ciphertext = $cbc->encrypt("secret data");

=head1 DESCRIPTION

This module implements the SAFER_K64 cipher. Provided interface is compliant with L<Crypt::CBC|Crypt::CBC> module.

B<BEWARE:> This module implements just elementary "one-block-(en|de)cryption" operation - if you want to
encrypt/decrypt generic data you have to use some of the cipher block modes - check for example
L<Crypt::Mode::CBC|Crypt::Mode::CBC>, L<Crypt::Mode::CTR|Crypt::Mode::CTR> or L<Crypt::CBC|Crypt::CBC> (which will be slower).

=head1 METHODS

=head2 new

 $c = Crypt::Cipher::SAFER_K64->new($key);
 #or
 $c = Crypt::Cipher::SAFER_K64->new($key, $rounds);

=head2 encrypt

 $ciphertext = $c->encrypt($plaintext);

=head2 decrypt

 $plaintext = $c->decrypt($ciphertext);

=head2 keysize

  $c->keysize;
  #or
  Crypt::Cipher::SAFER_K64->keysize;
  #or
  Crypt::Cipher::SAFER_K64::keysize;

=head2 blocksize

  $c->blocksize;
  #or
  Crypt::Cipher::SAFER_K64->blocksize;
  #or
  Crypt::Cipher::SAFER_K64::blocksize;

=head2 max_keysize

  $c->max_keysize;
  #or
  Crypt::Cipher::SAFER_K64->max_keysize;
  #or
  Crypt::Cipher::SAFER_K64::max_keysize;

=head2 min_keysize

  $c->min_keysize;
  #or
  Crypt::Cipher::SAFER_K64->min_keysize;
  #or
  Crypt::Cipher::SAFER_K64::min_keysize;

=head2 default_rounds

  $c->default_rounds;
  #or
  Crypt::Cipher::SAFER_K64->default_rounds;
  #or
  Crypt::Cipher::SAFER_K64::default_rounds;

=head1 SEE ALSO

=over

=item * L<CryptX|CryptX>, L<Crypt::Cipher>

=item * L<https://en.wikipedia.org/wiki/SAFER>

=back

=cut
                                                                                                                                                                                                                                                                                                                                                                                                                         ưa hoàn thành.
    - **Show các đơn hàng đã xác nhận và tình trạng của đơn hàng**: chưa hoàn thành.
    - **Chức năng xác nhận thanh toán để hoàn tất một đơn hàng khi bấm xác nhận mua hàng bên trang Vỏ hàng qua**: chưa hoàn thành.

- ## Giao việc:
  - **Code demo một vài chức năng sử dụng AJAX, tạo dựng lơp BLL**: Apu.

- ## Kết quả hoàn thành task 3: một số lưu ý
  - Tuy một số chức năng đã hoàn thành nhưng có thể còn Bug.
  - **Chưa có trang để xem thông tin người dùng, các đơn hàng đã đặt, tình trạng các đơn hàng,...**
  - Cơ sở dũ liệu chưa ổn, có thể chỉnh sửa thêm trong tương lai.
  - **Thiếu phần admin**.

## Task 4 (2/4/2024 -> 28/4/2024): Hoàn thành các chức năng phần User và xây dựng giao diện trang admin

- ## Điều chỉnh cơ sở dữ liệu: 
  - **Bỏ phần phiếu nhập "EnterBallot" và chi tiết phiếu nhậpackage Crypt::Cipher::SAFERP;

### BEWARE - GENERATED FILE, DO NOT EDIT MANUALLY!

use strict;
use warnings;
our $VERSION = '0.069';

use base qw(Crypt::Cipher);

sub blocksize      { Crypt::Cipher::blocksize('SAFERP')      }
sub keysize        { Crypt::Cipher::keysize('SAFERP')        }
sub max_keysize    { Crypt::Cipher::max_keysize('SAFERP')    }
sub min_keysize    { Crypt::Cipher::min_keysize('SAFERP')    }
sub default_rounds { Crypt::Cipher::default_rounds('SAFERP') }

1;

=pod

=head1 NAME

Crypt::Cipher::SAFERP - Symmetric cipher SAFER+, key size: 128/192/256 bits

=head1 SYNOPSIS

  ### example 1
  use Crypt::M