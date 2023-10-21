<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Templete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style type="text/css">
        /* div.noticia {
            width: 21.875rem;
            box-sizing: border-box;
            box-sizing: content-box;
        } */

        div.noticia {
            width: 21.875rem;
            box-sizing: border-box;
            box-sizing: content-box;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-right: 40px;
        }

        div.noticia img.derecha {
            float: right;
        }

        div.reset {
            clear: both;
        }

        aside {
            font-size: 0.9em
        }
    </style>
</head>

<body width="100%"
    style="margin: 3px -20px 0 -20px; padding: 0; font-size: 12pt; line-height: .1; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" style=" border-collapse: separate !important; border-spacing: 1px 1px;">
        <tbody width="100%">

            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 2 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 3 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 4 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.7 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.7 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 5 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.8 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 0.8 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 6 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; margin-top: 2px; padding-right: 40px">
                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 7 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 8 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            {{-- 9 --}}
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.3 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.3 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="70px">
                    <div class="noticia" style="margin-right: 15px; padding-right: 40px">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
                <td height="70px">
                    <div class="noticia">
                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <aside>
                            <p style="line-height: 1.2 !important ; ">{{ $elemetn->name }}</p>
                            <p>{{ $elemetn->sku }}</p>
                            <p>{{ $elemetn->sheet_size }}</p>
                            <p>{{ $elemetn->packing }}</p>
                        </aside>
                        <div class="reset"></div>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>

</body>

</html>
