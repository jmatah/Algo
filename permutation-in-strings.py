class Solution:
    def checkInclusion(self, s1: str, s2: str) -> bool:
        for left in range(len(s1)):
            if( s2.find(s1[left]) == -1 ):
                return False

        return True

s1 = "ab"
s2 = "eidboaoo"
sol = Solution()
out = sol.checkInclusion(s1, s2)
print(out)