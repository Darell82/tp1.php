@ECHO OFF
SET RUBY_BIN=C:\Ruby23-x64\bin


SET PATH=%RUBY_BIN%;%PATH%
SET RUBY_BIN=


ruby.exe -v





call sass --watch --sourcemap=none sass:web/css

pause