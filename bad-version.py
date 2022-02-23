# The isBadVersion API is already defined for you.
# def isBadVersion(version: int) -> bool:

def isBadVersion(n):
    global badVersion
    if n>=badVersion:
        return True
    else:
        return False

class Solution:
    def firstBadVersion(self, n: int) -> int:
        if isBadVersion(n) == False:
            return False
        elif isBadVersion(1) != False:
            return 1

        left = 1
        right = n
        lastBadVersion = 0

        while( right >= left ):
            mid = left + ((right-left)// 2)

            if isBadVersion(mid) == False:
                left = mid + 1
                if lastBadVersion > 0 and lastBadVersion - mid == 1:
                    break
            else:
                right = mid - 1
                lastBadVersion = mid
        
        return lastBadVersion

badVersion = 2000

sol = Solution()
ret = sol.firstBadVersion(2001)
print(f"\n{ret} is the first bad version.")