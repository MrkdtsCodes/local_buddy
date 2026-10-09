# Check disk space
keywords: disk space, storage, how much space left, full disk, check storage, disk usage
command: df -h
explains: Shows available and used space on mounted filesystems.
danger: no
---
# Check my IP address
keywords: ip address, my ip, find ip, network address, local ip, wifi ip
command: hostname -I
explains: Displays the IP addresses assigned to your computer.
danger: no
---
# Check free RAM
keywords: free ram, memory, check ram, available memory, ram usage, computer slow
command: free -h
explains: Shows total, used, and available memory in readable units.
danger: no
---
# Find a file by name
keywords: find file, search file, locate file, where is my file, find filename, missing file
command: find ~ -iname "filename"
explains: Searches your home folder for a file, ignoring uppercase and lowercase.
danger: no
---
# Delete a folder and everything in it
keywords: delete folder, remove folder, erase directory, delete everything inside folder, remove directory permanently
command: rm -r foldername
explains: Permanently deletes a folder and everything inside it. There is no undo.
danger: yes
---
# List files in a folder
keywords: list files, show files, see folder contents, what is inside, directory listing, files here, show documents, folder contents
command: ls -l
explains: Shows files and folders in the current folder with details.
danger: no
---
# List hidden files
keywords: hidden files, show hidden files, see all files, files not showing, dotfiles, list everything, hidden folders
command: ls -la
explains: Shows all files, including hidden files, in the current folder.
danger: no
---
# Show the current folder
keywords: current folder, where am I, current directory, show path, folder location, working directory, pwd command, terminal location
command: pwd
explains: Shows the full path of your current folder.
danger: no
---
# Go into a folder
keywords: open folder, enter folder, go into folder, change directory, access folder, cd command, navigate folder, switch directory
command: cd foldername
explains: Changes your current location to the specified folder.
danger: no
---
# Go back to the home folder
keywords: go home, home folder, return home, back to home, user folder, home directory, cd home, main folder
command: cd ~
explains: Returns you to your personal home folder.
danger: no
---
# Go up one folder
keywords: go back, parent folder, previous folder, up one folder, previous directory, leave folder, back directory, cd dot dot
command: cd ..
explains: Moves your current location up one folder.
danger: no
---
# Create a new folder
keywords: create folder, make folder, new directory, add folder, mkdir command, create directory, make a directory, new folder terminal
command: mkdir foldername
explains: Creates a new folder in your current location.
danger: no
---
# Create an empty file
keywords: create file, new file, empty file, make text file, touch command, create document, new blank file, make a file
command: touch filename
explains: Creates an empty file if it does not exist.
danger: no
---
# Copy a file
keywords: copy file, duplicate file, make a copy, clone document, cp command, backup file, copy document, duplicate filename
command: cp -i filename copyname
explains: Copies a file and asks before overwriting an existing destination.
danger: no
---
# Copy a folder
keywords: copy folder, duplicate folder, copy directory, clone folder, backup folder, cp folder, copy everything, duplicate directory
command: cp -ri foldername copyfolder
explains: Copies a folder and its contents, asking before overwriting existing files.
danger: no
---
# Move a file
keywords: move file, move document, transfer file, relocate file, move to folder, mv command, put file elsewhere, move filename
command: mv -i filename foldername/
explains: Moves a file and asks before overwriting an existing destination.
danger: no
---
# Rename a file
keywords: rename file, change filename, edit filename, new file name, mv rename, rename document, change file name, modify filename
command: mv -i oldname newname
explains: Renames a file and asks before overwriting an existing destination.
danger: no
---
# Delete a file
keywords: delete file, remove file, erase document, get rid of file, rm command, remove filename, delete document, unwanted file
command: rm -i filename
explains: Deletes a file after asking you to confirm.
danger: yes
---
# Delete an empty folder
keywords: delete empty folder, remove empty directory, rmdir command, erase empty folder, folder won't delete, remove blank folder, delete directory, get rid of folder
command: rmdir foldername
explains: Removes a folder only when it is empty.
danger: no
---
# Read a text file
keywords: read text file, show file contents, open file in terminal, view text, display document, cat command, read filename, print file
command: cat filename
explains: Displays the contents of a text file in the terminal.
danger: no
---
# See the first lines of a file
keywords: first lines, beginning of file, top of file, preview text, show file start, head command, read first lines, beginning of document
command: head filename
explains: Displays the first ten lines of a file.
danger: no
---
# See the last lines of a file
keywords: last lines, end of file, bottom of file, latest text, show file ending, tail command, read last lines, final lines
command: tail filename
explains: Displays the last ten lines of a file.
danger: no
---
# Show the size of a folder
keywords: folder size, directory size, how big folder, folder disk usage, check folder space, du command, storage used by folder, large folder
command: du -sh foldername
explains: Shows the total disk space used by a folder.
danger: no
---
# Show the size of a file
keywords: file size, how big file, check file size, document size, file storage, size of filename, file takes space, file details
command: ls -lh filename
explains: Shows the size of a file in readable units.
danger: no
---
# Clear the terminal screen
keywords: clear screen, clean terminal, remove terminal text, blank terminal, clear command, terminal clutter, erase terminal display, reset screen
command: clear
explains: Clears the visible text from the terminal screen.
danger: no
---
# See running processes
keywords: running processes, running programs, what is running, processes, task manager terminal, list programs
command: ps aux
explains: Shows a snapshot of all running programs and their resource use.
danger: no
---
# Check system uptime
keywords: uptime, how long computer running, system running time, last boot, computer uptime, how long has my computer been on
command: uptime
explains: Shows how long the computer has been running.
danger: no
---
# Change my password
keywords: change password, update password, new password, linux password, reset my password
command: passwd
explains: Lets you change your own account password.
danger: no
---
# Show the date and time
keywords: date, current date, current time, today's date, system clock, what time is it, linux time, check time
command: date
explains: Shows the current system date and time.
danger: no
---
# Show CPU info
keywords: CPU info, processor details, what CPU do I have, processor model, computer processor, CPU specifications, processor name, check my CPU
command: lscpu
explains: Shows information about your processor, including its model and capabilities.
danger: no
---
# Show the Linux version
keywords: Linux Mint version, which Mint, operating system version, what Linux version, Mint release, OS version, check Linux version, system release
command: lsb_release -a
explains: Shows the name and version of your Linux distribution (works on Mint and Ubuntu).
danger: no
---
# Show the kernel version
keywords: kernel version, Linux kernel, check kernel, what kernel am I using, kernel number, Linux version number, kernel details, current kernel
command: uname -r
explains: Shows the version of the Linux kernel currently running.
danger: no
---
# Show the computer name
keywords: computer name, PC name, device name, hostname, what is my computer called, machine name, Linux hostname, check device name
command: hostname
explains: Displays the name assigned to your computer.
danger: no
---
# Show which user I am
keywords: current user, who am I, username, logged in user, account name, Linux user, user identity, check my username
command: whoami
explains: Displays the username of your current account.
danger: no
---
# Show a calendar
keywords: calendar, show calendar, today's calendar, monthly calendar, current month, terminal calendar, Linux calendar, display dates
command: cal
explains: Displays a calendar for the current month (needs the cal utility, usually preinstalled).
danger: no
---
# Show battery status
keywords: battery status, battery percentage, laptop battery, battery level, charging status, battery remaining, check battery, laptop power
command: cat /sys/class/power_supply/BAT*/capacity
explains: Shows the battery charge percentage (the * covers BAT0, BAT1, etc.).
danger: no
---
# List USB devices
keywords: USB devices, connected USB, USB list, plugged in devices, USB information, detect USB, USB hardware, show connected devices
command: lsusb
explains: Lists detected USB devices.
danger: no
---
# List disks and partitions
keywords: disks, partitions, storage devices, hard drive list, SSD information, disk partitions, connected drives, show disks
command: lsblk
explains: Lists detected storage devices and their partitions.
danger: no
---
# Show system architecture
keywords: 32 bit or 64 bit, system architecture, computer bit version, Linux architecture, x86 or x64, operating system bits, processor architecture, check 64 bit
command: uname -m
explains: Shows the architecture of your system (x86_64 means 64-bit).
danger: no
---
# Show my home folder path
keywords: home folder path, home directory path, my user folder, personal folder location, home path, where is my home, Linux home directory, user directory
command: echo "$HOME"
explains: Displays the path to your personal home folder.
danger: no
---
# Show which shell I am using
keywords: current shell, bash version, which shell, terminal shell, shell name, command interpreter, am I using bash, Linux shell
command: echo $SHELL
explains: Displays the shell program your account uses (usually /bin/bash).
danger: no
---
# Show live CPU and memory usage
keywords: live CPU usage, system monitor terminal, CPU percentage, memory usage live, computer performance, resource usage, top command
command: top
explains: Opens a live view of running processes and their CPU and memory usage. Press q to quit.
danger: no
---
# Show the size of each folder here
keywords: folder sizes, sizes of folders, current directory sizes, which folder is largest, storage by folder, disk usage list, folder space, compare folder sizes
command: du -h --max-depth=1
explains: Shows the disk space used by each folder in the current directory.
danger: no
---
# Show who logged in recently
keywords: recent logins, login history, who logged in, previous users, last login, login records, account activity, login times
command: last
explains: Shows recorded login sessions when login records are available.
danger: no
---
# Show my command history
keywords: command history, previous commands, commands I typed, terminal history, past Linux commands, history list, what did I type, bash history
command: history
explains: Lists commands you typed earlier in this terminal.
danger: no
---
# Show screen resolution
keywords: screen resolution, display resolution, monitor size pixels, screen dimensions, display settings, current resolution, monitor resolution, desktop resolution
command: xrandr
explains: Lists your screens and their resolutions (the current one has a *).
danger: no
---
# Show the CPU temperature
keywords: CPU temperature, processor heat, CPU overheating, computer temperature, check CPU heat, processor temperature, Linux sensors, hardware temperature
command: cat /sys/class/thermal/thermal_zone*/temp
explains: Shows each temperature sensor in thousandths of a degree Celsius (45000 = 45°C).
danger: no
---
# Check if the internet works
keywords: internet not working, check internet, no internet connection, test internet, internet connection problem, online or offline, internet broken, check connectivity
command: ping -c 4 1.1.1.1
explains: Sends four test messages to check whether an internet-connected address responds.
danger: no
---
# Ping a website
keywords: ping website, test website connection, ping Google, check website network, website reachable, network test, ping command, test connection
command: ping -c 4 example.com
explains: Sends four test messages to check whether a website responds over the network.
danger: no
---
# Show nearby Wi-Fi networks
keywords: nearby Wi-Fi, available networks, scan Wi-Fi, find wireless networks, Wi-Fi list, nearby hotspots, detect Wi-Fi, show access points
command: nmcli device wifi list
explains: Lists nearby wireless networks detected by NetworkManager.
danger: no
---
# Show my Wi-Fi connection status
keywords: Wi-Fi status, connected Wi-Fi, wireless connection, am I connected, Wi-Fi connected, network status, wireless state, connection check
command: nmcli device status
explains: Shows network devices and whether they are connected or disconnected.
danger: no
---
# Connect to a Wi-Fi network
keywords: connect to wifi, join wifi, wifi password, connect wifi terminal, join wireless network, wifi connect
command: nmcli device wifi connect NAME password "PASSWORD"
explains: Connects to the Wi-Fi network called NAME using its password.
danger: no
---
# Show my public IP address
keywords: public IP, external IP, internet IP, what is my public address, outside IP, public address check, ISP IP, visible IP
command: curl -s https://ifconfig.me
explains: Requests your public IP address from an external website (needs internet).
danger: no
---
# Show open ports
keywords: open ports, listening ports, network ports, check ports, port list, server ports, ports on computer, show listening connections
command: ss -lntu
explains: Lists listening TCP and UDP ports on your computer.
danger: no
---
# Download a file from a link
keywords: download file, download from URL, save online file, get a file, download link, fetch file, internet download, save website file
command: wget URL
explains: Downloads the file at the given link into the current folder (needs internet).
danger: no
---
# Show DNS servers
keywords: DNS servers, DNS settings, name servers, internet DNS, check DNS, DNS address, domain lookup server, network name servers
command: resolvectl status
explains: Shows DNS settings when systemd-resolved is available and managing DNS.
danger: no
---
# Look up a website's IP address
keywords: website IP, find website address, domain IP, DNS lookup, IP of a website, resolve domain, website server address, domain name lookup
command: getent ahosts example.com
explains: Looks up and displays the IP addresses associated with a domain name.
danger: no
---
# Show all network interfaces
keywords: network interfaces, network adapters, Wi-Fi adapter, Ethernet interface, list interfaces, network devices, interface names, show network cards
command: ip address
explains: Shows network interfaces and their assigned IP addresses.
danger: no
---
# Show my MAC address
keywords: MAC address, hardware address, Wi-Fi MAC, Ethernet MAC, device physical address, network adapter address, find MAC, computer MAC
command: ip link
explains: Shows network interfaces and their hardware addresses.
danger: no
---
# Show my default gateway
keywords: default gateway, router IP, gateway address, Wi-Fi router address, network gateway, default route, find router IP, internet gateway
command: ip route
explains: Shows routing information, including the default gateway when one is configured.
danger: no
---
# Check if a website responds
keywords: website down, check website status, website responding, site not loading, test website, website unavailable, server response, check site online
command: curl -I --max-time 10 https://example.com
explains: Requests website response headers and stops waiting after ten seconds (needs internet).
danger: no
---
# Connect to another computer with SSH
keywords: SSH connection, connect to server, remote computer, login remotely, access another computer, secure shell, SSH login, remote Linux
command: ssh username@hostname
explains: Starts a secure remote login to another computer when SSH is installed and available.
danger: no
---
# Copy a file to another computer
keywords: send file to computer, copy file remotely, transfer file over network, SCP command, upload to server, remote file copy, send file to server, network file transfer
command: scp filename username@hostname:destination
explains: Copies a file to another computer using SSH. It can overwrite a file there without asking.
danger: yes
---
# Check if a port is in use
keywords: port in use, check port, busy port, port conflict, which service uses port, network port check, port occupied, application port
command: ss -lnt
explains: Lists listening TCP ports that may already be in use.
danger: no
---
# Turn Wi-Fi off
keywords: turn off Wi-Fi, disable wireless, Wi-Fi off, stop Wi-Fi, disconnect wireless, disable Wi-Fi adapter, switch off Wi-Fi, wireless disable
command: nmcli radio wifi off
explains: Disables Wi-Fi through NetworkManager until you turn it back on.
danger: yes
---
# Turn Wi-Fi on
keywords: turn on Wi-Fi, enable wireless, Wi-Fi on, restore Wi-Fi, activate Wi-Fi, switch on wireless, enable Wi-Fi adapter, wireless enable
command: nmcli radio wifi on
explains: Enables Wi-Fi through NetworkManager.
danger: no
---
# Show network speed per interface
keywords: network speed, live network traffic, internet usage, download speed interface, upload speed interface, bandwidth monitor, network traffic, Wi-Fi data rate
command: ip -s link
explains: Shows sent and received data totals for each network interface.
danger: no
---
# Show programs using the network
keywords: programs using internet, network connections, which app uses internet, network activity, connected applications, process network usage, active connections, programs online
command: ss -tunap
explains: Lists network connections and associated processes when sufficient permissions are available.
danger: no

---

# Check disk space
keywords: disk space, storage, how much space left, full disk, check storage, disk usage
command: df -h
explains: Shows available and used space on mounted filesystems.
danger: no
---
# Check my IP address
keywords: ip address, my ip, find ip, network address, local ip, wifi ip
command: hostname -I
explains: Displays the IP addresses assigned to your computer.
danger: no
---
# Check free RAM
keywords: free ram, memory, check ram, available memory, ram usage, computer slow
command: free -h
explains: Shows total, used, and available memory in readable units.
danger: no
---
# Find a file by name
keywords: find file, search file, locate file, where is my file, find filename, missing file
command: find ~ -iname "filename"
explains: Searches your home folder for a file, ignoring uppercase and lowercase.
danger: no
---
# Delete a folder and everything in it
keywords: delete folder, remove folder, erase directory, delete everything inside folder, remove directory permanently
command: rm -r foldername
explains: Permanently deletes a folder and everything inside it. There is no undo.
danger: yes
---
# List files in a folder
keywords: list files, show files, see folder contents, what is inside, directory listing, files here, show documents, folder contents
command: ls -l
explains: Shows files and folders in the current folder with details.
danger: no
---
# List hidden files
keywords: hidden files, show hidden files, see all files, files not showing, dotfiles, list everything, hidden folders
command: ls -la
explains: Shows all files, including hidden files, in the current folder.
danger: no
---
# Show the current folder
keywords: current folder, where am I, current directory, show path, folder location, working directory, pwd command, terminal location
command: pwd
explains: Shows the full path of your current folder.
danger: no
---
# Go into a folder
keywords: open folder, enter folder, go into folder, change directory, access folder, cd command, navigate folder, switch directory
command: cd foldername
explains: Changes your current location to the specified folder.
danger: no
---
# Go back to the home folder
keywords: go home, home folder, return home, back to home, user folder, home directory, cd home, main folder
command: cd ~
explains: Returns you to your personal home folder.
danger: no
---
# Go up one folder
keywords: go back, parent folder, previous folder, up one folder, previous directory, leave folder, back directory, cd dot dot
command: cd ..
explains: Moves your current location up one folder.
danger: no
---
# Create a new folder
keywords: create folder, make folder, new directory, add folder, mkdir command, create directory, make a directory, new folder terminal
command: mkdir foldername
explains: Creates a new folder in your current location.
danger: no
---
# Create an empty file
keywords: create file, new file, empty file, make text file, touch command, create document, new blank file, make a file
command: touch filename
explains: Creates an empty file if it does not exist.
danger: no
---
# Copy a file
keywords: copy file, duplicate file, make a copy, clone document, cp command, backup file, copy document, duplicate filename
command: cp -i filename copyname
explains: Copies a file and asks before overwriting an existing destination.
danger: no
---
# Copy a folder
keywords: copy folder, duplicate folder, copy directory, clone folder, backup folder, cp folder, copy everything, duplicate directory
command: cp -ri foldername copyfolder
explains: Copies a folder and its contents, asking before overwriting existing files.
danger: no
---
# Move a file
keywords: move file, move document, transfer file, relocate file, move to folder, mv command, put file elsewhere, move filename
command: mv -i filename foldername/
explains: Moves a file and asks before overwriting an existing destination.
danger: no
---
# Rename a file
keywords: rename file, change filename, edit filename, new file name, mv rename, rename document, change file name, modify filename
command: mv -i oldname newname
explains: Renames a file and asks before overwriting an existing destination.
danger: no
---
# Delete a file
keywords: delete file, remove file, erase document, get rid of file, rm command, remove filename, delete document, unwanted file
command: rm -i filename
explains: Deletes a file after asking you to confirm.
danger: yes
---
# Delete an empty folder
keywords: delete empty folder, remove empty directory, rmdir command, erase empty folder, folder won't delete, remove blank folder, delete directory, get rid of folder
command: rmdir foldername
explains: Removes a folder only when it is empty.
danger: no
---
# Read a text file
keywords: read text file, show file contents, open file in terminal, view text, display document, cat command, read filename, print file
command: cat filename
explains: Displays the contents of a text file in the terminal.
danger: no
---
# See the first lines of a file
keywords: first lines, beginning of file, top of file, preview text, show file start, head command, read first lines, beginning of document
command: head filename
explains: Displays the first ten lines of a file.
danger: no
---
# See the last lines of a file
keywords: last lines, end of file, bottom of file, latest text, show file ending, tail command, read last lines, final lines
command: tail filename
explains: Displays the last ten lines of a file.
danger: no
---
# Show the size of a folder
keywords: folder size, directory size, how big folder, folder disk usage, check folder space, du command, storage used by folder, large folder
command: du -sh foldername
explains: Shows the total disk space used by a folder.
danger: no
---
# Show the size of a file
keywords: file size, how big file, check file size, document size, file storage, size of filename, file takes space, file details
command: ls -lh filename
explains: Shows the size of a file in readable units.
danger: no
---
# Clear the terminal screen
keywords: clear screen, clean terminal, remove terminal text, blank terminal, clear command, terminal clutter, erase terminal display, reset screen
command: clear
explains: Clears the visible text from the terminal screen.
danger: no
---
# See running processes
keywords: running processes, running programs, what is running, processes, task manager terminal, list programs
command: ps aux
explains: Shows a snapshot of all running programs and their resource use.
danger: no
---
# Check system uptime
keywords: uptime, how long computer running, system running time, last boot, computer uptime, how long has my computer been on
command: uptime
explains: Shows how long the computer has been running.
danger: no
---
# Change my password
keywords: change password, update password, new password, linux password, reset my password
command: passwd
explains: Lets you change your own account password.
danger: no
---
# Show the date and time
keywords: date, current date, current time, today's date, system clock, what time is it, linux time, check time
command: date
explains: Shows the current system date and time.
danger: no
---
# Show CPU info
keywords: CPU info, processor details, what CPU do I have, processor model, computer processor, CPU specifications, processor name, check my CPU
command: lscpu
explains: Shows information about your processor, including its model and capabilities.
danger: no
---
# Show the Linux version
keywords: Linux Mint version, which Mint, operating system version, what Linux version, Mint release, OS version, check Linux version, system release
command: lsb_release -a
explains: Shows the name and version of your Linux distribution (works on Mint and Ubuntu).
danger: no
---
# Show the kernel version
keywords: kernel version, Linux kernel, check kernel, what kernel am I using, kernel number, Linux version number, kernel details, current kernel
command: uname -r
explains: Shows the version of the Linux kernel currently running.
danger: no
---
# Show the computer name
keywords: computer name, PC name, device name, hostname, what is my computer called, machine name, Linux hostname, check device name
command: hostname
explains: Displays the name assigned to your computer.
danger: no
---
# Show which user I am
keywords: current user, who am I, username, logged in user, account name, Linux user, user identity, check my username
command: whoami
explains: Displays the username of your current account.
danger: no
---
# Show a calendar
keywords: calendar, show calendar, today's calendar, monthly calendar, current month, terminal calendar, Linux calendar, display dates
command: cal
explains: Displays a calendar for the current month (needs the cal utility, usually preinstalled).
danger: no
---
# Show battery status
keywords: battery status, battery percentage, laptop battery, battery level, charging status, battery remaining, check battery, laptop power
command: cat /sys/class/power_supply/BAT*/capacity
explains: Shows the battery charge percentage (the * covers BAT0, BAT1, etc.).
danger: no
---
# List USB devices
keywords: USB devices, connected USB, USB list, plugged in devices, USB information, detect USB, USB hardware, show connected devices
command: lsusb
explains: Lists detected USB devices.
danger: no
---
# List disks and partitions
keywords: disks, partitions, storage devices, hard drive list, SSD information, disk partitions, connected drives, show disks
command: lsblk
explains: Lists detected storage devices and their partitions.
danger: no
---
# Show system architecture
keywords: 32 bit or 64 bit, system architecture, computer bit version, Linux architecture, x86 or x64, operating system bits, processor architecture, check 64 bit
command: uname -m
explains: Shows the architecture of your system (x86_64 means 64-bit).
danger: no
---
# Show my home folder path
keywords: home folder path, home directory path, my user folder, personal folder location, home path, where is my home, Linux home directory, user directory
command: echo "$HOME"
explains: Displays the path to your personal home folder.
danger: no
---
# Show which shell I am using
keywords: current shell, bash version, which shell, terminal shell, shell name, command interpreter, am I using bash, Linux shell
command: echo $SHELL
explains: Displays the shell program your account uses (usually /bin/bash).
danger: no
---
# Show live CPU and memory usage
keywords: live CPU usage, system monitor terminal, CPU percentage, memory usage live, computer performance, resource usage, top command
command: top
explains: Opens a live view of running processes and their CPU and memory usage. Press q to quit.
danger: no
---
# Show the size of each folder here
keywords: folder sizes, sizes of folders, current directory sizes, which folder is largest, storage by folder, disk usage list, folder space, compare folder sizes
command: du -h --max-depth=1
explains: Shows the disk space used by each folder in the current directory.
danger: no
---
# Show who logged in recently
keywords: recent logins, login history, who logged in, previous users, last login, login records, account activity, login times
command: last
explains: Shows recorded login sessions when login records are available.
danger: no
---
# Show my command history
keywords: command history, previous commands, commands I typed, terminal history, past Linux commands, history list, what did I type, bash history
command: history
explains: Lists commands you typed earlier in this terminal.
danger: no
---
# Show screen resolution
keywords: screen resolution, display resolution, monitor size pixels, screen dimensions, display settings, current resolution, monitor resolution, desktop resolution
command: xrandr
explains: Lists your screens and their resolutions (the current one has a *).
danger: no
---
# Show the CPU temperature
keywords: CPU temperature, processor heat, CPU overheating, computer temperature, check CPU heat, processor temperature, Linux sensors, hardware temperature
command: cat /sys/class/thermal/thermal_zone*/temp
explains: Shows each temperature sensor in thousandths of a degree Celsius (45000 = 45°C).
danger: no
---
# Check if the internet works
keywords: internet not working, check internet, no internet connection, test internet, internet connection problem, online or offline, internet broken, check connectivity
command: ping -c 4 1.1.1.1
explains: Sends four test messages to check whether an internet-connected address responds.
danger: no
---
# Ping a website
keywords: ping website, test website connection, ping Google, check website network, website reachable, network test, ping command, test connection
command: ping -c 4 example.com
explains: Sends four test messages to check whether a website responds over the network.
danger: no
---
# Show nearby Wi-Fi networks
keywords: nearby Wi-Fi, available networks, scan Wi-Fi, find wireless networks, Wi-Fi list, nearby hotspots, detect Wi-Fi, show access points, 
command: nmcli device wifi list
explains: Lists nearby wireless networks detected by NetworkManager.
danger: no
---
# Show my Wi-Fi connection status
keywords: Wi-Fi status, connected Wi-Fi, wireless connection, am I connected, Wi-Fi connected, network status, wireless state, connection check
command: nmcli device status
explains: Shows network devices and whether they are connected or disconnected.
danger: no
---
# Connect to a Wi-Fi network
keywords: connect to wifi, join wifi, wifi password, connect wifi terminal, join wireless network, wifi connect, connect, how to connect, wifi
command: nmcli device wifi connect NAME password "PASSWORD"
explains: Connects to the Wi-Fi network called NAME using its password.
danger: no
---
# Show my public IP address
keywords: public IP, external IP, internet IP, what is my public address, outside IP, public address check, ISP IP, visible IP
command: curl -s https://ifconfig.me
explains: Requests your public IP address from an external website (needs internet).
danger: no
---
# Show open ports
keywords: open ports, listening ports, network ports, check ports, port list, server ports, ports on computer, show listening connections
command: ss -lntu
explains: Lists listening TCP and UDP ports on your computer.
danger: no
---
# Download a file from a link
keywords: download file, download from URL, save online file, get a file, download link, fetch file, internet download, save website file
command: wget URL
explains: Downloads the file at the given link into the current folder (needs internet).
danger: no
---
# Show DNS servers
keywords: DNS servers, DNS settings, name servers, internet DNS, check DNS, DNS address, domain lookup server, network name servers
command: resolvectl status
explains: Shows DNS settings when systemd-resolved is available and managing DNS.
danger: no
---
# Look up a website's IP address
keywords: website IP, find website address, domain IP, DNS lookup, IP of a website, resolve domain, website server address, domain name lookup
command: getent ahosts example.com
explains: Looks up and displays the IP addresses associated with a domain name.
danger: no
---
# Show all network interfaces
keywords: network interfaces, network adapters, Wi-Fi adapter, Ethernet interface, list interfaces, network devices, interface names, show network cards
command: ip address
explains: Shows network interfaces and their assigned IP addresses.
danger: no
---
# Show my MAC address
keywords: MAC address, hardware address, Wi-Fi MAC, Ethernet MAC, device physical address, network adapter address, find MAC, computer MAC
command: ip link
explains: Shows network interfaces and their hardware addresses.
danger: no
---
# Show my default gateway
keywords: default gateway, router IP, gateway address, Wi-Fi router address, network gateway, default route, find router IP, internet gateway
command: ip route
explains: Shows routing information, including the default gateway when one is configured.
danger: no
---
# Check if a website responds
keywords: website down, check website status, website responding, site not loading, test website, website unavailable, server response, check site online
command: curl -I --max-time 10 https://example.com
explains: Requests website response headers and stops waiting after ten seconds (needs internet).
danger: no
---
# Connect to another computer with SSH
keywords: SSH connection, connect to server, remote computer, login remotely, access another computer, secure shell, SSH login, remote Linux
command: ssh username@hostname
explains: Starts a secure remote login to another computer when SSH is installed and available.
danger: no
---
# Copy a file to another computer
keywords: send file to computer, copy file remotely, transfer file over network, SCP command, upload to server, remote file copy, send file to server, network file transfer
command: scp filename username@hostname:destination
explains: Copies a file to another computer using SSH. It can overwrite a file there without asking.
danger: yes
---
# Check if a port is in use
keywords: port in use, check port, busy port, port conflict, which service uses port, network port check, port occupied, application port
command: ss -lnt
explains: Lists listening TCP ports that may already be in use.
danger: no
---
# Turn Wi-Fi off
keywords: turn off Wi-Fi, disable wireless, Wi-Fi off, stop Wi-Fi, disconnect wireless, disable Wi-Fi adapter, switch off Wi-Fi, wireless disable
command: nmcli radio wifi off
explains: Disables Wi-Fi through NetworkManager until you turn it back on.
danger: yes
---
# Turn Wi-Fi on
keywords: turn on Wi-Fi, enable wireless, Wi-Fi on, restore Wi-Fi, activate Wi-Fi, switch on wireless, enable Wi-Fi adapter, wireless enable
command: nmcli radio wifi on
explains: Enables Wi-Fi through NetworkManager.
danger: no
---
# Show network speed per interface
keywords: network speed, live network traffic, internet usage, download speed interface, upload speed interface, bandwidth monitor, network traffic, Wi-Fi data rate
command: ip -s link
explains: Shows sent and received data totals for each network interface.
danger: no
---
# Show programs using the network
keywords: programs using internet, network connections, which app uses internet, network activity, connected applications, process network usage, active connections, programs online
command: ss -tunap
explains: Lists network connections and associated processes when sufficient permissions are available.
danger: no
---
# Make a file runnable
keywords: make file executable, make file runnable, permission denied run file, chmod plus x, allow file to run, give execute permission
command: chmod +x filename
explains: Gives a file permission to run as a program.
danger: no
---
# Run a file in this folder
keywords: run file, run program here, execute file, run a script, run executable, start file in folder
command: ./filename
explains: Runs the program or script called filename from the current folder.
danger: no
---
# See file permissions
keywords: file permissions, who can open file, check permissions, permission of file, read write execute, show permissions
command: ls -l filename
explains: Shows a file's permissions and owner at the start of the line.
danger: no
---
# Take ownership of a folder
keywords: fix folder ownership, own a folder, change owner, chown command, permission denied folder, take ownership
command: sudo chown -R $USER:$USER foldername
explains: Makes you the owner of a folder and everything inside it. Be careful with the folder name.
danger: yes
---
# Run a command as admin
keywords: run as admin, run as root, administrator command, use sudo, superuser, need admin rights
command: sudo command
explains: Runs the command with administrator rights. Put sudo in front of any command.
danger: yes
---
# Stop a frozen program
keywords: close frozen program, kill program, stop a program, force close app, app not responding, program frozen, force quit
command: pkill programname
explains: Force-stops every program with that name. Unsaved work in it is lost.
danger: yes
---
# Find a program's process ID
keywords: find process id, pid of program, is program running, find process by name, get pid
command: pgrep -l programname
explains: Shows the process ID and name of running programs that match.
danger: no
---
# Open a nicer system monitor
keywords: htop, better task manager, nicer system monitor, interactive process viewer, colorful monitor
command: htop
explains: Opens a colorful live view of CPU and memory use. Press q to quit. Install with sudo apt install htop if missing.
danger: no
---
# Search for text inside files
keywords: search text in files, find text, grep command, find word in files, search inside files, find a word
command: grep -rn "text" .
explains: Searches the current folder and subfolders for the text and shows file names and line numbers.
danger: no
---
# Count lines in a file
keywords: count lines, number of lines, how many lines, wc command, line count
command: wc -l filename
explains: Shows how many lines a file has.
danger: no
---
# Edit a text file in the terminal
keywords: edit text file, open text editor terminal, nano editor, write a file, edit file terminal, change file contents
command: nano filename
explains: Opens a simple text editor. Press Ctrl+O then Enter to save, and Ctrl+X to exit.
danger: no
---
# Zip a folder
keywords: zip folder, compress folder, make zip, create zip archive, compress files, make a zip file
command: zip -r archive.zip foldername
explains: Packs a folder into archive.zip. Install with sudo apt install zip if missing.
danger: no
---
# Unzip a file
keywords: unzip file, extract zip, open zip file, decompress zip, extract archive zip, unzip archive
command: unzip file.zip
explains: Extracts the contents of file.zip into the current folder.
danger: no
---
# Make a tar.gz archive
keywords: tar compress, create tar.gz, tarball, compress with tar, make tar archive, make tar.gz
command: tar -czf archive.tar.gz foldername
explains: Packs and compresses a folder into archive.tar.gz.
danger: no
---
# Extract a tar.gz archive
keywords: extract tar.gz, untar, open tar file, extract tarball, unpack tar, unpack archive
command: tar -xzf archive.tar.gz
explains: Extracts the contents of archive.tar.gz into the current folder.
danger: no
---
# Update the package list
keywords: update package list, refresh software list, apt update, refresh repositories, check for new software versions
command: sudo apt update
explains: Refreshes the list of available software. It does not install anything yet. Needs internet.
danger: no
---
# Upgrade all software
keywords: upgrade software, update all programs, install updates, update system packages, apt upgrade, update my system
command: sudo apt upgrade
explains: Installs available updates for your programs. Run sudo apt update first. Needs internet.
danger: no
---
# Install a program
keywords: install program, install software, apt install, install app, get a package, add software, install a package
command: sudo apt install packagename
explains: Installs a program from the Mint software sources. Needs internet.
danger: no
---
# Uninstall a program
keywords: uninstall program, remove software, apt remove, delete app, uninstall app, remove a package
command: sudo apt remove packagename
explains: Uninstalls a program but keeps its settings files.
danger: yes
---
# Remove unused packages
keywords: remove unused packages, clean unneeded packages, autoremove, free space from packages, clean leftover packages
command: sudo apt autoremove
explains: Removes packages that were installed as dependencies and are no longer needed. This frees disk space.
danger: yes
---
# Search for a package
keywords: search for software, find a package, search apt, is software available, find program to install
command: apt search keyword
explains: Searches the software sources for programs matching the keyword.
danger: no
---
# List installed programs
keywords: installed programs, list installed software, what is installed, installed packages, show apps installed
command: apt list --installed | less
explains: Shows every installed package, one page at a time. Press q to quit.
danger: no
---
# Start XAMPP
keywords: start xampp, run xampp, start local server xampp, start apache xampp, xampp not running
command: sudo /opt/lampp/lampp start
explains: Starts Apache and MariaDB from XAMPP.
danger: no
---
# Open MariaDB in the terminal
keywords: open mariadb, mysql terminal, database terminal, enter mariadb, xampp database, open mysql
command: sudo /opt/lampp/bin/mysql -u root
explains: Opens the MariaDB command line that comes with XAMPP. Type exit to leave.
danger: no
---
# Show TLP battery saver status
keywords: tlp status, check tlp, battery saver status, power saving status, is tlp running
command: sudo tlp-stat -s
explains: Shows whether TLP power saving is running. Install with sudo apt install tlp if missing.
danger: no
---
# Open the Wi-Fi settings menu
keywords: wifi settings terminal, network menu, text network manager, nmtui, edit connections, network settings terminal
command: nmtui
explains: Opens a text menu for Wi-Fi. Use arrow keys and Enter, and Esc to go back.
danger: no
---
# Forget a Wi-Fi network
keywords: forget wifi, forget network, remove saved wifi, delete wifi connection, remove wifi profile
command: nmcli connection delete NAME
explains: Removes the saved Wi-Fi network called NAME. You will need the password to join it again.
danger: yes
---
# Show saved Wi-Fi networks
keywords: saved wifi networks, saved connections, list saved networks, known networks, wifi history
command: nmcli connection show
explains: Lists the network connections your computer has saved.
danger: no
---
# See changed files in git
keywords: git status, see changed files, what changed in git, check git changes, repo status
command: git status
explains: Shows which files changed in your git project.
danger: no
---
# Save changes in git
keywords: git commit, save changes git, commit changes, git add, save my work git
command: git add . && git commit -m "message"
explains: Stages all changes and saves them as a commit with your message.
danger: no
---
# Upload commits to GitHub
keywords: git push, upload commits, push code, send code to github, push to github
command: git push
explains: Sends your saved commits to the remote repository (needs internet).
danger: no
---
# Download changes from GitHub
keywords: git pull, download changes, update repo, pull from github, get latest code
command: git pull
explains: Downloads and merges the latest changes from the remote repository (needs internet).
danger: no
---
# Run Tailwind CSS
keywords: run tailwind, tailwind watch, build tailwind css, tailwind cli, start tailwind
command: npx tailwindcss -i input.css -o output.css --watch
explains: Builds your Tailwind CSS and rebuilds it whenever you save. Run it inside your project folder.
danger: no
---
# Turn off the computer
keywords: turn off computer, shut down, shutdown, power off, switch off pc, turn off pc
command: systemctl poweroff
explains: Shuts down the computer right away. Save your work first.
danger: yes
---
# Restart the computer
keywords: restart computer, reboot, restart pc, reboot linux, restart linux
command: reboot
explains: Restarts the computer right away. Save your work first.
danger: yes
---
# Open a folder in the file manager
keywords: open folder in file manager, open current folder, show folder in gui, open file manager, open folder graphically
command: xdg-open .
explains: Opens the current folder in your normal file manager window.
danger: no
---
# Find where a program is
keywords: where is program installed, find program location, which command, location of command, where is command
command: which programname
explains: Shows the path of the program that runs when you type its name.
danger: no
---
# Read the manual for a command
keywords: manual for command, how to use command, command help, man page, help with command
command: man commandname
explains: Opens the manual for a command. Press q to quit.
danger: no
---
# Show the time zone
keywords: time zone, check timezone, what timezone am I in, timezone settings, clock timezone
command: timedatectl
explains: Shows the date, time, and time zone settings.
danger: no

---
# Copy selected text or files
keywords: copy, ctrl c, copy text, copy shortcut, how to copy, copy selected, duplicate text, copy paste
command: Ctrl + C
explains: Copies what you selected (text, files, folders) so you can paste it somewhere else. In the terminal, use Ctrl + Shift + C instead.
danger: no
---
# Paste what you copied
keywords: paste, ctrl v, paste text, paste shortcut, how to paste, insert copied text, copy paste, put text
command: Ctrl + V
explains: Pastes the last thing you copied or cut. In the terminal, use Ctrl + Shift + V instead.
danger: no
---
# Cut selected text or files
keywords: cut, ctrl x, cut text, cut shortcut, move text, remove and copy, cut file, how to cut
command: Ctrl + X
explains: Removes the selected text or file and keeps it ready to paste somewhere else.
danger: no
---
# Copy in the terminal
keywords: copy in terminal, terminal copy, ctrl shift c, copy terminal text, can't copy terminal, ctrl c not copying
command: Ctrl + Shift + C
explains: Copies selected text in the terminal. Plain Ctrl + C in the terminal stops the running program instead.
danger: no
---
# Paste in the terminal
keywords: paste in terminal, terminal paste, ctrl shift v, paste terminal text, can't paste terminal, ctrl v not working
command: Ctrl + Shift + V
explains: Pastes text into the terminal. Plain Ctrl + V often does not work there.
danger: no
---
# Undo the last action
keywords: undo, ctrl z, undo mistake, go back, undo typing, undo shortcut, revert change, oops
command: Ctrl + Z
explains: Undoes your last action in most apps, like typing or deleting.
danger: no
---
# Redo an undone action
keywords: redo, ctrl y, redo shortcut, bring back undone, undo the undo, redo change, ctrl shift z
command: Ctrl + Y
explains: Brings back the action you just undid. Some apps use Ctrl + Shift + Z instead.
danger: no
---
# Select everything
keywords: select all, ctrl a, highlight everything, select everything, select all text, select all files
command: Ctrl + A
explains: Selects all text in a document or all files in a folder.
danger: no
---
# Save a file
keywords: save, ctrl s, save file, save document, save my work, save shortcut, save changes
command: Ctrl + S
explains: Saves the file you are working on. In the nano editor, use Ctrl + O instead.
danger: no
---
# Find text on a page or document
keywords: find, ctrl f, search page, search text, find word, search in page, find on page
command: Ctrl + F
explains: Opens a search box to find words on a web page or in a document.
danger: no
---
# Print a page or document
keywords: print, ctrl p, print page, print document, print shortcut, how to print
command: Ctrl + P
explains: Opens the print window for the current page or document.
danger: no
---
# Open a file
keywords: open file, ctrl o, open document, browse files, open shortcut
command: Ctrl + O
explains: Opens a window to choose a file to open in the current app.
danger: no
---
# Make text bold
keywords: bold, ctrl b, bold text, make text bold, bold shortcut
command: Ctrl + B
explains: Makes the selected text bold in most editors. Press again to remove it.
danger: no
---
# Make text italic
keywords: italic, ctrl i, italic text, slanted text, italic shortcut
command: Ctrl + I
explains: Makes the selected text italic in most editors. Press again to remove it.
danger: no
---
# Stop a running command
keywords: stop command, cancel command, ctrl c terminal, interrupt, command stuck, stop program terminal, cancel running, kill command, terminal frozen
command: Ctrl + C
explains: In the terminal, stops the program that is running right now.
danger: no
---
# Exit the terminal or log out of a session
keywords: exit terminal, close terminal, ctrl d, logout, end session, leave shell, exit ssh
command: Ctrl + D
explains: Closes the terminal session or exits an SSH connection. Same as typing exit.
danger: no
---
# Clear the terminal with a shortcut
keywords: clear terminal shortcut, ctrl l, clean screen shortcut, clear screen fast
command: Ctrl + L
explains: Clears the terminal screen quickly, same as the clear command.
danger: no
---
# Search your command history
keywords: search history, ctrl r, find old command, reverse search, previous command search, find command I typed
command: Ctrl + R
explains: Type a few letters to search commands you used before. Press Enter to run the one you find.
danger: no
---
# Repeat the previous command
keywords: previous command, repeat command, up arrow, run last command again, last command, redo command terminal
command: Up Arrow, then Enter
explains: Brings back the last command you typed so you can run it again.
danger: no
---
# Autocomplete a file or command name
keywords: autocomplete, tab key, finish typing, complete command, complete filename, tab completion
command: Tab
explains: Finishes the file, folder, or command name you started typing. Press twice to see all options.
danger: no
---
# Jump to the start of the terminal line
keywords: start of line, ctrl a terminal, beginning of command, move cursor start, go to start
command: Ctrl + A
explains: In the terminal, moves your cursor to the start of the line you are typing.
danger: no
---
# Jump to the end of the terminal line
keywords: end of line, ctrl e, move cursor end, go to end, end of command
command: Ctrl + E
explains: In the terminal, moves your cursor to the end of the line you are typing.
danger: no
---
# Delete the whole terminal line
keywords: delete line terminal, clear typed command, ctrl u, erase line, wipe command, remove typed text
command: Ctrl + U
explains: Deletes everything you typed on the current terminal line before the cursor.
danger: no
---
# Open a new terminal
keywords: open terminal, new terminal, start terminal, terminal shortcut, ctrl alt t, launch terminal
command: Ctrl + Alt + T
explains: Opens a new terminal window on Linux Mint.
danger: no
---
# Open a new terminal tab
keywords: new terminal tab, terminal tab, ctrl shift t, add tab, another terminal
command: Ctrl + Shift + T
explains: Opens a new tab inside your current terminal window.
danger: no
---
# Switch between open windows
keywords: switch window, alt tab, change app, switch app, next window, swap windows
command: Alt + Tab
explains: Switches to the next open window. Hold Alt and keep pressing Tab to pick one.
danger: no
---
# Close the current window
keywords: close window, alt f4, quit app, close app, close program, exit window
command: Alt + F4
explains: Closes the current window. Unsaved work may be lost.
danger: yes
---
# Show the desktop
keywords: show desktop, minimize all, super d, hide windows, see desktop
command: Super + D
explains: Hides all windows to show the desktop. Press again to bring them back. Super is the Windows key.
danger: no
---
# Lock the screen
keywords: lock screen, lock computer, super l, lock pc, secure screen, step away
command: Super + L
explains: Locks your screen so a password is needed to continue.
danger: no
---
# Take a screenshot
keywords: screenshot, print screen, capture screen, screen capture, save screen image, take picture of screen
command: Print Screen
explains: Takes a picture of the whole screen and saves it to your Pictures folder.
danger: no
---
# Take a screenshot of one window
keywords: screenshot window, capture one window, alt print screen, window screenshot, current window picture
command: Alt + Print Screen
explains: Takes a screenshot of only the window you are using.
danger: no
---
# Open the system menu search
keywords: open menu, search apps, start menu, find app, super key, launch app, open program
command: Super
explains: Opens the Mint menu, where you can type to search for apps and files.
danger: no
---
# Zoom in
keywords: zoom in, make bigger, bigger text, increase size, ctrl plus, enlarge page
command: Ctrl + +
explains: Makes a web page or document larger. Press Ctrl + 0 to reset.
danger: no
---
# Zoom out
keywords: zoom out, make smaller, smaller text, decrease size, ctrl minus, shrink page
command: Ctrl + -
explains: Makes a web page or document smaller. Press Ctrl + 0 to reset.
danger: no
---
# Refresh a web page
keywords: refresh, reload page, f5, reload website, update page, page not updating
command: F5
explains: Reloads the web page. Use Ctrl + Shift + R to reload and ignore saved files.
danger: no
---
# Open a new browser tab
keywords: new tab, open tab, ctrl t, browser tab, add tab, another tab
command: Ctrl + T
explains: Opens a new tab in your web browser.
danger: no
---
# Close the current browser tab
keywords: close tab, ctrl w, close browser tab, shut tab, remove tab
command: Ctrl + W
explains: Closes the tab you are on in your web browser.
danger: no
---
# Reopen a closed browser tab
keywords: reopen tab, restore tab, closed tab by mistake, undo close tab, bring back tab
command: Ctrl + Shift + T
explains: Reopens the last browser tab you closed.
danger: no
---
# Rename a file in the file manager
keywords: rename shortcut, f2, rename file gui, change name file manager, rename selected
command: F2
explains: Lets you rename the selected file or folder in the file manager.
danger: no
---
# Show hidden files in the file manager
keywords: show hidden files gui, ctrl h, hidden files file manager, dotfiles gui, reveal hidden
command: Ctrl + H
explains: Shows or hides hidden files in the file manager.
danger: no
---
# Delete a file to Trash
keywords: delete file gui, move to trash, delete key, trash file, remove file file manager
command: Delete
explains: Moves the selected file to the Trash, where you can still recover it.
danger: no
---
# Delete a file permanently in the file manager
keywords: permanent delete, shift delete, delete forever, skip trash, erase file for good
command: Shift + Delete
explains: Deletes the selected file permanently without using the Trash. There is no undo.
danger: yes
---
# Force close a frozen window with a click
keywords: frozen window, click to close, kill app gui, force close window, xkill, app not responding, close stuck window
command: xkill
explains: Turns your cursor into a skull. Click a frozen window to force close it. Press Esc to cancel.
danger: yes

---
# Close the whole browser window
keywords: close window browser, close brave window, close browser window, close all tabs, shut browser window, close chrome window
command: Ctrl + Shift + W
explains: Closes the whole browser window, including all its tabs. Ctrl + W closes only the current tab.
danger: no
---
# Install an app from a downloaded file
keywords: install downloaded app, install app from zip, run downloaded file, install dbgate, install appimage, app not in software manager, install app not apt, run installer file
command: chmod +x ./filename && ./filename
explains: Unzip the download, open its folder in the terminal, give the file permission to run, then run it. Replace filename with the real file name.
danger: no
---
# Open Pixelorama
keywords: open pixelorama, run pixelorama, start pixelorama, pixel art app, launch pixelorama
command: ./Pixelorama.x86_64
explains: Runs Pixelorama from the folder where you extracted it. Run chmod +x Pixelorama.x86_64 first if it says permission denied.
danger: no
---
# Open the XAMPP control panel
keywords: xampp gui, xampp control panel, xampp manager, open xampp window, xampp graphical, xampp manager gui
command: sudo /opt/lampp/manager-linux-x64.run
explains: Opens the XAMPP window with buttons to start and stop Apache and MariaDB.
danger: no
---
# Stop XAMPP
keywords: stop xampp, close xampp, turn off xampp, shut down apache xampp, stop local server xampp
command: sudo /opt/lampp/lampp stop
explains: Stops Apache and MariaDB from XAMPP.
danger: no
---
# Turn on TLP at every startup
keywords: enable tlp, tlp on startup, tlp every boot, auto start tlp, tlp always on
command: sudo systemctl enable tlp
explains: Makes TLP battery saver start by itself every time you turn on the computer.
danger: no
---
# Start TLP right now
keywords: start tlp, run tlp, turn on tlp now, launch tlp, tlp not running
command: sudo systemctl start tlp
explains: Starts TLP battery saver immediately without restarting the computer.
danger: no
---
# Check if the TLP service is running
keywords: tlp service status, is tlp active, tlp running check, tlp systemctl, tlp working
command: sudo systemctl status tlp
explains: Shows whether the TLP service is running. Press q to exit.
danger: no
---
# See TLP CPU settings
keywords: tlp cpu, tlp processor, tlp cpu settings, what tlp does to cpu, tlp stat processor, cpu power settings
command: sudo tlp-stat -p
explains: Shows the processor settings TLP is using to save power.
danger: no
---
# Run Tailwind with src and dist folders
keywords: tailwind src dist, tailwind input output folders, tailwindcss src input, tailwind dist output, run tailwind src
command: tailwindcss -i ./src/input.css -o ./dist/output.css --watch
explains: Builds Tailwind CSS from src/input.css into dist/output.css and rebuilds when you save. Run it from your project folder.
danger: no
---
# Start the project dev server
keywords: npm run dev, start dev server, run project, start development, run vite, run tailwind dev
command: npm run dev
explains: Runs the dev script in your project's package.json, usually to start the dev server or Tailwind. Run it inside the project folder.
danger: no
---
# Install an npm package
keywords: npm install, install package npm, add npm library, install node package, npm add, install javascript library
command: npm install packagename
explains: Downloads a JavaScript package into your project's node_modules folder (needs internet).
danger: no
---
# Run a JavaScript file with Node
keywords: run javascript file, node file, run js, node command, execute js file, run node script
command: node filename.js
explains: Runs a JavaScript file in the terminal using Node.
danger: no