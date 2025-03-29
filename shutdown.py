import urllib.request
from datetime import datetime, timedelta
import os 
import time

# URL of the file on the server
file_url = "http://3.74.74.110//file2.txt"

# Function to read the date and time from the file
def read_datetime_from_file(url):
    try:
        # Open the file URL and read its contents
        with urllib.request.urlopen(url) as response:
            file_contents = response.read().decode("utf-8")

        # Process the file contents to extract the date and time
        datetime_str = file_contents.strip()
        return datetime_str
    except Exception as e:
        print(f"Error reading file: {e}")
        return "2000-12-23 12:12"

while True:
    try:
        value = read_datetime_from_file(file_url)
        current_date = datetime.now()
        current_date = current_date.strftime("%Y-%m-%d %H:%M")
        # Read the datetime from the file
        print(value)
        print(current_date)
        data = datetime.strptime(value, "%Y-%m-%d %H:%M")
        converted_datetime2 = datetime.strptime(current_date, "%Y-%m-%d %H:%M")
        time3 = data - converted_datetime2
        print(time3)
        if time3 and time3.days == 0:
            if time3 < timedelta(hours=0, minutes=5):
                # Execute code if the condition is True
                print("The time difference is less than 0 hours and 5 minutes. Executing code...")
                os.system('shutdown /s /t 0')
            else:
                print("The time difference is not less than 0 hours and 5 minutes.")
        else:
            print("THE SERVER SET Time is NOT TRUE")
        time.sleep(100) 
        print("Script is running")
    except Exception as e:
        print(f"FILE NOT FOUND 404 {e}")
        time.sleep(200)
        exit()      

