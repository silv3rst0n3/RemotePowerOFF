filetime=$(cat /var/log/apache2/access.log | grep "/file2.txt" | tail -n 1 | cut -d ":" -f 2,3)
current_time=$(date +%H:%M:%S)
TIME=$(date -d "$current_time - 2 hours 30 minutes" +%H:%M)
echo "TIME ALAN=$TIME"
logtime=$(date -d "$filetime - 2 hours 30 minutes" +%H:%M)
echo "log timed=$logtime " 
diff_seconds=$(($(date -d "$TIME" +%M) - $(date -d "$logtime" +%M)))
echo "$diff_seconds"
diff2=$(expr $diff_seconds + 0)

if [ $diff2 -lt 3 ] && [ $diff2 -gt 0 ]; then
	echo "1" > $PWD/log.txt
else
	echo "0" > $PWD/log.txt
fi
